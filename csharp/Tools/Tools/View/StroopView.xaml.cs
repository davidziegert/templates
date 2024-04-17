using System.Diagnostics;
using System.IO;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Media.Imaging;
using Tools.Helper;

namespace Tools.View
{
    /// <summary>
    /// Interaktionslogik für StroopView.xaml
    /// </summary>
    public partial class StroopView : UserControl
    {
        private Random randomizer = new Random();
        private Stopwatch watch = new Stopwatch();
        private List<string> results = new List<string>();
        private int caseSwitch;
        private int button;

        public StroopView()
        {
            InitializeComponent();

            results.Add("PICTURE;BUTTON;TIME;");

            ShuffleImages();
            watch.Start();

            var _task = new BackgroundTask(TimeSpan.FromSeconds(1));
            _task.Start(watch);
        }

        public void ShuffleImages()
        {
            caseSwitch = randomizer.Next(1, 6);

            switch (caseSwitch)
            {
                case 1:
                    myPictureBox.Source = new BitmapImage(new Uri("/Images/pig.png", UriKind.Relative));
                    break;

                case 2:
                    myPictureBox.Source = new BitmapImage(new Uri("/Images/snail.png", UriKind.Relative));
                    break;

                case 3:
                    myPictureBox.Source = new BitmapImage(new Uri("/Images/fish.png", UriKind.Relative));
                    break;

                case 4:
                    myPictureBox.Source = new BitmapImage(new Uri("/Images/ladybug.png", UriKind.Relative));
                    break;

                case 5:
                    myPictureBox.Source = new BitmapImage(new Uri("/Images/penguin.png", UriKind.Relative));
                    break;

                default:
                    myPictureBox.Source = new BitmapImage(new Uri("/Images/pig.png", UriKind.Relative));
                    break;
            }
        }

        public void WriteData()
        {
            results.Add(caseSwitch + ";" + button + ";" + Convert.ToString(watch.Elapsed.TotalMilliseconds) + ";");
        }

        public void SaveData()
        {
            DateTime now = DateTime.Now;
            string filename = now.ToString("MM_dd_yyyy__HH_mm");

            try
            {
                File.WriteAllLines(filename + ".txt", results);
                MessageBox.Show("Data saved");
            }
            catch
            {
                MessageBox.Show("Data not saved");
            }
        }

        private void btn_LeftClick(object sender, System.Windows.RoutedEventArgs e)
        {
            button = 1;
            WriteData();
            ShuffleImages();
            watch.Restart();
        }

        private void btn_RightClick(object sender, System.Windows.RoutedEventArgs e)
        {
            button = 2;
            WriteData();
            ShuffleImages();
            watch.Restart();
        }

        private void btn_SaveClick(object sender, RoutedEventArgs e)
        {
            SaveData();
            watch.Stop();
            btn_Left.IsEnabled = false;
            btn_Right.IsEnabled = false;
            btn_Save.IsEnabled = false;
        }

        public void ControlCounter()
        {
            if (watch.Elapsed.TotalMilliseconds > 5000)
            {
                results.Add(caseSwitch + ";" + "0" + ";" + Convert.ToString(watch.Elapsed.TotalMilliseconds) + ";");
                ShuffleImages();
                watch.Restart();
            };
        }
    }
}