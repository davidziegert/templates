using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Navigation;
using System.Windows.Shapes;

namespace Kleinwind.View
{
    /// <summary>
    /// Interaktionslogik für InputView.xaml
    /// </summary>
    public partial class InputView : UserControl
    {
        #region Methods

        public void MakeLocation()
        {
            switch (cmbx_Standort.SelectedIndex)
            {
                case -1:
                    tbx_Formfaktor.IsEnabled = false;
                    tbx_Skalierungsfaktor.IsEnabled = false;
                    tbx_Messhoehe.IsEnabled = false;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = false;
                    tbx_Rauhigkeitslaenge.IsEnabled = false;
                    break;

                case 0:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = true;
                    tbx_Messhoehe.IsEnabled = false;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = false;
                    tbx_Rauhigkeitslaenge.IsEnabled = false;
                    break;

                case 1:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = false;
                    tbx_Messhoehe.IsEnabled = true;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = true;
                    tbx_Rauhigkeitslaenge.IsEnabled = true;
                    break;

                case 2:
                    tbx_Formfaktor.IsEnabled = true;
                    tbx_Skalierungsfaktor.IsEnabled = false;
                    tbx_Messhoehe.IsEnabled = true;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = true;
                    tbx_Rauhigkeitslaenge.IsEnabled = true;
                    break;

                default:
                    tbx_Formfaktor.IsEnabled = false;
                    tbx_Skalierungsfaktor.IsEnabled = false;
                    tbx_Messhoehe.IsEnabled = false;
                    tbx_Jahreswindgeschwindigkeit.IsEnabled = false;
                    tbx_Rauhigkeitslaenge.IsEnabled = false;
                    break;
            }
        }

        #endregion Methods

        public InputView()
        {
            InitializeComponent();
        }

        private void cmbx_Standort_SelectionChanged(object sender, SelectionChangedEventArgs e)
        {
            MakeLocation();
        }
    }
}
