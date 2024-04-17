// DLL IMPORT C:\Windows\assembly\GAC_64\Microsoft.Ink\6.1.0.0__31bf3856ad364e35\Microsoft.Ink.dll
using Microsoft.Ink;
using System.IO;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;

namespace Tools.View
{
    /// <summary>
    /// Interaktionslogik für TextView.xaml
    /// </summary>
    public partial class TextView : UserControl
    {
        private List<string> points;

        public TextView()
        {
            InitializeComponent();

            points = new List<string>();
        }

        private void btn_ColorBlueClick(object sender, RoutedEventArgs e)
        {
            myInkCanvas.DefaultDrawingAttributes.Color = Colors.Blue;
        }

        private void btn_ColorGreenClick(object sender, RoutedEventArgs e)
        {
            myInkCanvas.DefaultDrawingAttributes.Color = Colors.Green;
        }

        private void btn_ColorOrangeClick(object sender, RoutedEventArgs e)
        {
            myInkCanvas.DefaultDrawingAttributes.Color = Colors.Orange;
        }

        private void btn_ColorRedClick(object sender, RoutedEventArgs e)
        {
            myInkCanvas.DefaultDrawingAttributes.Color = Colors.Red;
        }

        private void btn_InkCanvasClearClick(object sender, RoutedEventArgs e)
        {
            myInkCanvas.Strokes.Clear();
        }

        private void btn_CountStrokesClick(object sender, RoutedEventArgs e)
        {
            MessageBox.Show("Counted Strokes: " + Convert.ToString(myInkCanvas.Strokes.Count()));
        }

        private void btn_ColorizeStrokesClick(object sender, RoutedEventArgs e)
        {
            Random random = new Random();

            foreach (System.Windows.Ink.Stroke stroke in myInkCanvas.Strokes)
            {
                stroke.DrawingAttributes.Color = Color.FromRgb((byte)random.Next(255), (byte)random.Next(255), (byte)random.Next(255));
            }
        }

        private void CollectedStrokes(object sender, InkCanvasStrokeCollectedEventArgs e)
        {
            foreach (StylusPoint point in e.Stroke.StylusPoints)
            {
                points.Add("POINT-X;POINT-Y;POINT-PRESSURE;");
                points.Add(point.X.ToString() + ";" + point.Y.ToString() + ";" + point.PressureFactor.ToString() + ";");
            }
        }

        private void btn_SaveDataClick(object sender, RoutedEventArgs e)
        {
            DateTime now = DateTime.Now;
            string filename = now.ToString("MM_dd_yyyy__HH_mm");

            try
            {
                // STYLUS DATA
                File.WriteAllLines(filename + ".txt", points);

                // IMAGE
                RenderTargetBitmap bitmap = new RenderTargetBitmap((int)this.myInkCanvas.ActualWidth, (int)this.myInkCanvas.ActualHeight, 96, 96, PixelFormats.Pbgra32);
                bitmap.Render(this.myInkCanvas);
                PngBitmapEncoder encoder = new PngBitmapEncoder();
                encoder.Frames.Add(BitmapFrame.Create(bitmap));
                FileStream file = new FileStream(@filename + ".jpg", FileMode.Create);
                encoder.Save(file);
                file.Close();

                MessageBox.Show("Data saved");
            }
            catch
            {
                MessageBox.Show("Data not saved");
            }
        }

        private void btn_TextRecognitionClick(object sender, RoutedEventArgs e)
        {
            // HANDWRITING TO TEXT
            using (MemoryStream myStream = new MemoryStream())
            {
                myInkCanvas.Strokes.Save(myStream);
                var myInkCollector = new InkCollector();
                var ink = new Ink();
                ink.Load(myStream.ToArray());

                using (RecognizerContext context = new RecognizerContext())
                {
                    if (ink.Strokes.Count > 0)
                    {
                        context.Strokes = ink.Strokes;
                        RecognitionStatus status;

                        var result = context.Recognize(out status);

                        if (status == RecognitionStatus.NoError)
                        {
                            MessageBox.Show(result.TopString);
                        }
                        else
                        {
                            MessageBox.Show("Recognition failed");
                        }
                    }
                    else
                    {
                        MessageBox.Show("No stroke detected");
                    }
                }
            }
        }
    }
}