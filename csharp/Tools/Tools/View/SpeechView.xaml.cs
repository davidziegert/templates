//Nu-Get System.Speech
using System.Speech.Recognition;
using System.Speech.Synthesis;
using System.Windows.Controls;

namespace Tools.View
{
    /// <summary>
    /// Interaktionslogik für SpeechView.xaml
    /// </summary>
    public partial class SpeechView : UserControl
    {
        private int Hypothesized = 0;
        private int Recognized = 0;

        private enum State
        {
            Idle = 0,
            Accepting = 1,
            Off = 2,
        }

        private State RecogState = State.Off;
        private SpeechRecognitionEngine recognizer;
        private SpeechSynthesizer synthesizer = null;

        public SpeechView()
        {
            InitializeComponent();
        }

        private void Loaded_Window(object sender, System.Windows.RoutedEventArgs e)
        {
            InitializeRecognizerSynthesizer();

            if (SelectInputDevice())
            {
                LoadDictationGrammar();
            }
        }

        #region Initialization

        private void InitializeRecognizerSynthesizer()
        {
            var selectedRecognizer = (from e in SpeechRecognitionEngine.InstalledRecognizers()
                                      where e.Culture.Equals(Thread.CurrentThread.CurrentCulture)
                                      select e).FirstOrDefault();
            recognizer = new SpeechRecognitionEngine(selectedRecognizer);
            recognizer.AudioStateChanged += new EventHandler<AudioStateChangedEventArgs>(recognizer_AudioStateChanged);
            recognizer.SpeechHypothesized += new EventHandler<SpeechHypothesizedEventArgs>(recognizer_SpeechHypothesized);
            recognizer.SpeechRecognized += new EventHandler<SpeechRecognizedEventArgs>(recognizer_SpeechRecognized);

            synthesizer = new SpeechSynthesizer();
        }

        private bool SelectInputDevice()
        {
            bool proceedLoading = true;
            //if OS is above XP
            if (IsOscompatible())
            {
                try
                {
                    recognizer.SetInputToDefaultAudioDevice();
                }
                catch
                {
                    proceedLoading = false; //no audio input device
                }
            }
            //if OS is XP or below
            else
                ThreadPool.QueueUserWorkItem(InitSpeechRecogniser);
            return proceedLoading;
        }

        private bool IsOscompatible()
        {
            OperatingSystem osInfo = Environment.OSVersion;
            if (osInfo.Version > new Version("6.0"))
                return true;
            else
                return false;
        }

        private void InitSpeechRecogniser(object o)
        {
            recognizer.SetInputToDefaultAudioDevice();
        }

        private void LoadDictationGrammar()
        {
            GrammarBuilder grammarBuilder = new GrammarBuilder();
            grammarBuilder.Append(new Choices("End Dictate"));
            Grammar commandGrammar = new Grammar(grammarBuilder);
            commandGrammar.Name = "main command grammar";
            recognizer.LoadGrammar(commandGrammar);

            DictationGrammar dictationGrammar = new DictationGrammar();
            dictationGrammar.Name = "dictation";
            recognizer.LoadGrammar(dictationGrammar);
        }

        #endregion Initialization

        #region Recognizer Events

        private void recognizer_AudioStateChanged(object sender, AudioStateChangedEventArgs e)
        {
            switch (e.AudioState)
            {
                case AudioState.Speech:
                    myStatus.Text = "Listening";
                    break;

                case AudioState.Silence:
                    myStatus.Text = "Idle";
                    break;

                case AudioState.Stopped:
                    myStatus.Text = "Stopped";
                    break;
            }
        }

        private void recognizer_SpeechHypothesized(object sender, SpeechHypothesizedEventArgs e)
        {
            Hypothesized++;
            myHypothesize.Text = Hypothesized.ToString();
        }

        private void recognizer_SpeechRecognized(object sender, SpeechRecognizedEventArgs e)
        {
            Recognized++;
            myRecognize.Text = Recognized.ToString();

            if (RecogState == State.Off)
            {
                return;
            }
            else
            {
                float accuracy = (float)e.Result.Confidence;
                string phrase = e.Result.Text;
                myOutput.AppendText(" " + e.Result.Text);
            }
        }

        #endregion Recognizer Events

        private void myButtonClick(object sender, System.Windows.RoutedEventArgs e)
        {
            switch (RecogState)
            {
                case State.Off:
                    RecogState = State.Accepting;
                    myButton.Content = "Stop";
                    recognizer.RecognizeAsync(RecognizeMode.Multiple);
                    break;

                case State.Accepting:
                    RecogState = State.Off;
                    myButton.Content = "Start";
                    recognizer.RecognizeAsyncStop();
                    break;
            }
        }
    }
}