using MVVM.Helper;
using MVVM.Model;
using System.IO;
using System.Text.Json;
using System.Windows;
using System.Windows.Input;

namespace MVVM.ViewModel
{
    //ViewModel for showing the Data from the Model
    public class DataViewModel : BaseViewModel
    {
        private DataModel _dataModel;
        Random rnd = new Random();

        public int Zahl1
        {
            get { return _dataModel.Zahl1; }
            set
            {
                if (_dataModel.Zahl1 != value)
                {
                    _dataModel.Zahl1 = value;
                    RaisePropertyChanged("Zahl1");
                    RaisePropertyChanged("Zahl3");
                }
            }
        }

        public int Zahl2
        {
            get { return _dataModel.Zahl2; }
            set
            {
                if (_dataModel.Zahl2 != value)
                {
                    _dataModel.Zahl2 = value;
                    RaisePropertyChanged("Zahl2");
                    RaisePropertyChanged("Zahl3");
                }
            }
        }

        public int Zahl3
        {
            get { return Zahl1 + Zahl2; }
        }

        public ICommand RandomNumberCommand
        {
            get;
            set;
        }

        public void RandomNumber(object obj)
        {
            Zahl1 = rnd.Next();
            Zahl2 = rnd.Next();
        }

        public ICommand ReadJsonCommand
        {
            get;
            set;
        }

        public void ReadJson(object obj)
        {
            try
            {
                string _file = File.ReadAllText(@"./Data/Data.json");
                var _data = JsonSerializer.Deserialize<DataModel>(_file);

                if (_data != null)
                {
                    Zahl1 = _data.Zahl1;
                    Zahl2 = _data.Zahl2;
                }
            }
            catch
            {
                MessageBox.Show("Cannot READ Json");
            }
        }

        public ICommand UpdateJsonCommand
        {
            get;
            set;
        }

        public void UpdateJson(object obj)
        {
            try
            {
                string _file = "./Data/Data.json";
                var _data = JsonSerializer.Serialize(_dataModel);

                if (_data != null)
                {
                    File.WriteAllText(_file, _data);
                }
            }
            catch
            {
                MessageBox.Show("Cannot UPDATE Json");
            }
        }

        public ICommand DeleteJsonCommand
        {
            get;
            set;
        }

        public void DeleteJson(object obj)
        {
            try
            {
                string _file = "./Data/Data.json";
                var _params = new Dictionary<string, int>
                {
                    {"Zahl1",0},
                    {"Zahl2",0},
                    {"Zahl3",0}
                };
                var _data = JsonSerializer.Serialize(_params);

                if (_data != null)
                {
                    File.WriteAllText(_file, _data);
                }
            }
            catch
            {
                MessageBox.Show("Cannot UPDATE Json");
            }
        }

        public DataViewModel()
        {
            _dataModel = new DataModel();

            RandomNumberCommand = new RelayCommand(RandomNumber);
            ReadJsonCommand = new RelayCommand(ReadJson);
            UpdateJsonCommand = new RelayCommand(UpdateJson);
            DeleteJsonCommand = new RelayCommand(DeleteJson);
        }
    }
}