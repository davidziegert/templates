using System.ComponentModel;

namespace Kleinwind.Helper
{
    public class BaseViewModel : INotifyPropertyChanged
    {
#pragma warning disable CS8612 // Die NULL-Zulässigkeit von Verweistypen im Typ entspricht nicht dem implizit implementierten Member.
        public event PropertyChangedEventHandler PropertyChanged;
#pragma warning restore CS8612 // Die NULL-Zulässigkeit von Verweistypen im Typ entspricht nicht dem implizit implementierten Member.

        protected virtual void RaisePropertyChanged(string propertyName = "")
        {
            if (!string.IsNullOrEmpty(propertyName))
            {
                this.PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(propertyName));
            }
        }
    }
}
