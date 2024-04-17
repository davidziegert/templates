using System.Windows.Input;
using Tools.ViewModel;

namespace Tools.Helper
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

        public ICommand HomeCommand { get; set; }
        public ICommand KinectCommand { get; set; }
        public ICommand SpeechCommand { get; set; }
        public ICommand StroopCommand { get; set; }
        public ICommand TextCommand { get; set; }

        #endregion Commands

        #region ViewModels

        private void Home(object obj) => CurrentViewModel = new HomeViewModel();

        private void Kinect(object obj) => CurrentViewModel = new KinectViewModel();

        private void Speech(object obj) => CurrentViewModel = new SpeechViewModel();

        private void Stroop(object obj) => CurrentViewModel = new StroopViewModel();

        private void Text(object obj) => CurrentViewModel = new TextViewModel();

        #endregion ViewModels

        public NavigationViewModel()
        {
            HomeCommand = new RelayCommand(Home);
            KinectCommand = new RelayCommand(Kinect);
            SpeechCommand = new RelayCommand(Speech);
            StroopCommand = new RelayCommand(Stroop);
            TextCommand = new RelayCommand(Text);

            CurrentViewModel = new HomeViewModel();
        }
    }
}