using System.Windows.Controls;

namespace Kleinwind.View
{
    /// <summary>
    /// Interaktionslogik für InputView.xaml
    /// </summary>
    public partial class InputView : UserControl
    {
        public InputView()
        {
            InitializeComponent();
        }

        public void Standort()
        {
            switch (cmbx_Standort.SelectedIndex)
            {
                case 1:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = true;
                    tbx_Messhoehe.IsEnabled = false;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = false;
                    tbx_Rauhigkeitslaenge.IsEnabled = false;
                    break;

                case 2:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = false;
                    tbx_Messhoehe.IsEnabled = true;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = true;
                    tbx_Rauhigkeitslaenge.IsEnabled = true;
                    break;

                case 3:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = false;
                    tbx_Messhoehe.IsEnabled = true;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = true;
                    tbx_Rauhigkeitslaenge.IsEnabled = true;
                    break;

                default:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = true;
                    tbx_Messhoehe.IsEnabled = true;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = true;
                    tbx_Rauhigkeitslaenge.IsEnabled = true;
                    break;
            }
        }

        private void ComboBox_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
        }
    }
}