using Kleinwind.ViewModel;
using System.Windows.Input;

namespace Kleinwind.Helper
{
    public class NavigationViewModel : BaseViewModel
    {
        private object _currentViewModel;

        public object CurrentViewModel
        {
            get { return _currentViewModel; }
            set { _currentViewModel = value; RaisePropertyChanged("CurrentViewModel"); }
        }

        #region Commands

        public ICommand EnergieCommand { get; set; }
        public ICommand GlossarCommand { get; set; }
        public ICommand HomeCommand { get; set; }
        public ICommand InputCommand { get; set; }
        public ICommand OutputCommand { get; set; }
        public ICommand PerformanceCommand { get; set; }
        public ICommand WindCommand { get; set; }

        #endregion Commands

        #region ViewModels

        private void Energie(object obj) => CurrentViewModel = new EnergieViewModel();

        private void Glossar(object obj) => CurrentViewModel = new GlossarViewModel();

        private void Home(object obj) => CurrentViewModel = new HomeViewModel();

        private void Input(object obj) => CurrentViewModel = new InputViewModel();

        private void Output(object obj) => CurrentViewModel = new OutputViewModel();

        private void Performance(object obj) => CurrentViewModel = new PerformanceViewModel();

        private void Wind(object obj) => CurrentViewModel = new WindViewModel();

        #endregion ViewModels

        public NavigationViewModel()
        {
            EnergieCommand = new RelayCommand(Energie);
            GlossarCommand = new RelayCommand(Glossar);
            HomeCommand = new RelayCommand(Home);
            InputCommand = new RelayCommand(Input);
            OutputCommand = new RelayCommand(Output);
            PerformanceCommand = new RelayCommand(Performance);
            WindCommand = new RelayCommand(Wind);

            CurrentViewModel = new HomeViewModel();
        }
    }
}
