using System.Windows;

namespace Kleinwind
{
    /// <summary>
    /// Interaction logic for MainWindow.xaml
    /// </summary>
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
        }

        private void btn_Home_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = true;
            btn_Input.IsChecked = false;
            btn_Wind.IsChecked = false;
            btn_Performance.IsChecked = false;
            btn_Energie.IsChecked = false;
            btn_Output.IsChecked = false;
            btn_Glossar.IsChecked = false;
        }

        private void btn_Input_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = false;
            btn_Input.IsChecked = true;
            btn_Wind.IsChecked = false;
            btn_Performance.IsChecked = false;
            btn_Energie.IsChecked = false;
            btn_Output.IsChecked = false;
            btn_Glossar.IsChecked = false;
        }

        private void btn_Wind_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = false;
            btn_Input.IsChecked = false;
            btn_Wind.IsChecked = true;
            btn_Performance.IsChecked = false;
            btn_Energie.IsChecked = false;
            btn_Output.IsChecked = false;
            btn_Glossar.IsChecked = false;
        }

        private void btn_Performance_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = false;
            btn_Input.IsChecked = false;
            btn_Wind.IsChecked = false;
            btn_Performance.IsChecked = true;
            btn_Energie.IsChecked = false;
            btn_Output.IsChecked = false;
            btn_Glossar.IsChecked = false;
        }

        private void btn_Energie_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = false;
            btn_Input.IsChecked = false;
            btn_Wind.IsChecked = false;
            btn_Performance.IsChecked = false;
            btn_Energie.IsChecked = true;
            btn_Output.IsChecked = false;
            btn_Glossar.IsChecked = false;
        }

        private void btn_Output_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = false;
            btn_Input.IsChecked = false;
            btn_Wind.IsChecked = false;
            btn_Performance.IsChecked = false;
            btn_Energie.IsChecked = false;
            btn_Output.IsChecked = true;
            btn_Glossar.IsChecked = false;
        }

        private void btn_Glossar_Click(object sender, RoutedEventArgs e)
        {
            btn_Home.IsChecked = false;
            btn_Input.IsChecked = false;
            btn_Wind.IsChecked = false;
            btn_Performance.IsChecked = false;
            btn_Energie.IsChecked = false;
            btn_Output.IsChecked = false;
            btn_Glossar.IsChecked = true;
        }

        private void btn_Minimize_Click(object sender, RoutedEventArgs e)
        {
            this.WindowState = WindowState.Minimized;
        }

        private void btn_Close_Click(object sender, RoutedEventArgs e)
        {
            this.Close();
        }
    }
}