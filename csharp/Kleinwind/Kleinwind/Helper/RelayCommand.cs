using System.Windows.Input;

namespace Kleinwind.Helper
{
    public class RelayCommand : ICommand
    {
        private Action<object> execute;
        private Func<object, bool> canExecute;

#pragma warning disable CS8612 // Die NULL-Zulässigkeit von Verweistypen im Typ entspricht nicht dem implizit implementierten Member.
        public event EventHandler CanExecuteChanged
#pragma warning restore CS8612 // Die NULL-Zulässigkeit von Verweistypen im Typ entspricht nicht dem implizit implementierten Member.
        {
            add { CommandManager.RequerySuggested += value; }
            remove { CommandManager.RequerySuggested -= value; }
        }

        public RelayCommand(Action<object> execute, Func<object, bool> canExecute = null)
        {
            this.execute = execute;
            this.canExecute = canExecute;
        }

#pragma warning disable CS8767 // Die NULL-Zulässigkeit von Verweistypen im Typ des Parameters entspricht (möglicherweise aufgrund von Attributen für die NULL-Zulässigkeit) nicht dem implizit implementierten Member.
        public bool CanExecute(object parameter)
#pragma warning restore CS8767 // Die NULL-Zulässigkeit von Verweistypen im Typ des Parameters entspricht (möglicherweise aufgrund von Attributen für die NULL-Zulässigkeit) nicht dem implizit implementierten Member.
        {
            return this.canExecute == null || this.canExecute(parameter);
        }

#pragma warning disable CS8767 // Die NULL-Zulässigkeit von Verweistypen im Typ des Parameters entspricht (möglicherweise aufgrund von Attributen für die NULL-Zulässigkeit) nicht dem implizit implementierten Member.
        public void Execute(object parameter)
#pragma warning restore CS8767 // Die NULL-Zulässigkeit von Verweistypen im Typ des Parameters entspricht (möglicherweise aufgrund von Attributen für die NULL-Zulässigkeit) nicht dem implizit implementierten Member.
        {
            this.execute(parameter);
        }
    }
}
