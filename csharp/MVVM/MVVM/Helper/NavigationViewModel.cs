using MVVM.ViewModel;
using System.Windows.Input;

namespace MVVM.Helper
{
    //Handles switching the ViewModels/Views
    public class NavigationViewModel : BaseViewModel
    {
        private object _currentViewModel;
        public object CurrentViewModel
        {
            get { return _currentViewModel; }
            set { _currentViewModel = value; RaisePropertyChanged("CurrentViewModel"); }
        }

        //List of all commands for switching the ViewModels/Views
        public ICommand HomeCommand { get; set; }
        public ICommand DataCommand { get; set; }

        //List of all switchable ViewModels/Views
        private void Home(object obj) => CurrentViewModel = new HomeViewModel();
        private void Data(object obj) => CurrentViewModel = new DataViewModel();

        public NavigationViewModel()
        {
            //Make the commands accessible
            HomeCommand = new RelayCommand(Home);
            DataCommand = new RelayCommand(Data);

            //Startup Page
            CurrentViewModel = new HomeViewModel();
        }
    }
}
