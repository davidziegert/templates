using Kleinwind.ViewModel;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
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
        public ICommand HomeCommand { get; set; }
        #endregion

        #region ViewModels
        private void Home(object obj) => CurrentViewModel = new HomeViewModel();
        #endregion

        public NavigationViewModel()
        {
            HomeCommand = new RelayCommand(Home);

            CurrentViewModel = new HomeViewModel();
        }
    }
}
