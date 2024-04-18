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
using Kleinwind;

namespace Kleinwind.View
{
    /// <summary>
    /// Interaktionslogik für HomeView.xaml
    /// </summary>
    public partial class HomeView : UserControl
    {
        MainWindow form;

        public HomeView()
        {
            InitializeComponent();
            try { form = Application.Current.Windows[0] as MainWindow; } catch { }
        }

        private void btn_NewProject_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                form.btn_Home.IsEnabled = true;
                form.btn_Input.IsEnabled = true;
                form.btn_Wind.IsEnabled = true;
                form.btn_Performance.IsEnabled = true;
                form.btn_Energie.IsEnabled = true;
                form.btn_Output.IsEnabled = true;
                form.btn_Glossar.IsEnabled = true;
            }
            catch { }
        }

        private void btn_ExampleProject_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                form.btn_Home.IsEnabled = true;
                form.btn_Input.IsEnabled = true;
                form.btn_Wind.IsEnabled = true;
                form.btn_Performance.IsEnabled = true;
                form.btn_Energie.IsEnabled = true;
                form.btn_Output.IsEnabled = true;
                form.btn_Glossar.IsEnabled = true;
            }
            catch { }
        }
    }
}
