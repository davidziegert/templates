using Kleinwind.Helper;
using Kleinwind.Model;
using System.Windows.Input;

namespace Kleinwind.ViewModel
{
    public class InputViewModel : BaseViewModel
    {
        private DataModel _dataModel;

        #region Variables

        public string Projektname
        {
            get { return _dataModel.projektname; }
            set
            {
                if (_dataModel.projektname != value)
                {
                    _dataModel.projektname = value;
                    RaisePropertyChanged("projektname");
                }
            }
        }

        public int Projektlaufzeit
        {
            get { return _dataModel.projektlaufzeit; }
            set
            {
                if (_dataModel.projektlaufzeit != value)
                {
                    _dataModel.projektlaufzeit = value;
                    RaisePropertyChanged("projektlaufzeit");
                }
            }
        }

        public double Verfuegbarkeit
        {
            get { return _dataModel.verfuegbarkeit; }
            set
            {
                if (_dataModel.verfuegbarkeit != value)
                {
                    _dataModel.verfuegbarkeit = value;
                    RaisePropertyChanged("verfuegbarkeit");
                }
            }
        }

        public int Standortvorgabe
        {
            get { return _dataModel.standortvorgabe; }
            set
            {
                if (_dataModel.standortvorgabe != value)
                {
                    _dataModel.standortvorgabe = value;
                    RaisePropertyChanged("standortvorgabe");

                    switch (_dataModel.standortvorgabe)
                    {
                        case 1:
                            Formfaktor = 0;
                            Skalierungsfaktor = 0;
                            Messhoehe = 0;
                            Jahreswindgeschwindigkeit = 0;
                            Rauhigkeitslaenge = 0;
                            break;

                        case 2:
                            Formfaktor = 0;
                            Skalierungsfaktor = 0;
                            Messhoehe = 0;
                            Jahreswindgeschwindigkeit = 0;
                            Rauhigkeitslaenge = 0;
                            break;

                        case 3:
                            Formfaktor = 2;
                            Skalierungsfaktor = 0;
                            Messhoehe = 30;
                            Jahreswindgeschwindigkeit = 5.5;
                            Rauhigkeitslaenge = 0.1;
                            break;

                        default:
                            Formfaktor = 0;
                            Skalierungsfaktor = 0;
                            Messhoehe = 0;
                            Jahreswindgeschwindigkeit = 0;
                            Rauhigkeitslaenge = 0;
                            break;
                    }
                }
            }
        }

        public double Formfaktor
        {
            get { return _dataModel.formfaktor; }
            set
            {
                if (_dataModel.formfaktor != value)
                {
                    _dataModel.formfaktor = value;
                    RaisePropertyChanged("formfaktor");
                }
            }
        }

        public double Skalierungsfaktor
        {
            get { return _dataModel.skalierungsfaktor; }
            set
            {
                if (_dataModel.skalierungsfaktor != value)
                {
                    _dataModel.skalierungsfaktor = value;
                    RaisePropertyChanged("skalierungsfaktor");
                }
            }
        }

        public double Messhoehe
        {
            get { return _dataModel.messhoehe; }
            set
            {
                if (_dataModel.messhoehe != value)
                {
                    _dataModel.messhoehe = value;
                    RaisePropertyChanged("messhoehe");
                }
            }
        }

        public double Jahreswindgeschwindigkeit
        {
            get { return _dataModel.jahreswindgeschwindigkeit; }
            set
            {
                if (_dataModel.jahreswindgeschwindigkeit != value)
                {
                    _dataModel.jahreswindgeschwindigkeit = value;
                    RaisePropertyChanged("jahreswindgeschwindigkeit");
                }
            }
        }

        public double Rauhigkeitslaenge
        {
            get { return _dataModel.rauhigkeitslaenge; }
            set
            {
                if (_dataModel.rauhigkeitslaenge != value)
                {
                    _dataModel.rauhigkeitslaenge = value;
                    RaisePropertyChanged("rauhigkeitslaenge");
                }
            }
        }

        public double Nennleistung
        {
            get { return _dataModel.nennleistung; }
            set
            {
                if (_dataModel.nennleistung != value)
                {
                    _dataModel.nennleistung = value;
                    RaisePropertyChanged("nennleistung");
                }
            }
        }

        public double Nenngeschwindigkeit
        {
            get { return _dataModel.nenngeschwindigkeit; }
            set
            {
                if (_dataModel.nenngeschwindigkeit != value)
                {
                    _dataModel.nenngeschwindigkeit = value;
                    RaisePropertyChanged("nenngeschwindigkeit");
                }
            }
        }

        public double Nabenhoehe
        {
            get { return _dataModel.nabenhoehe; }
            set
            {
                if (_dataModel.nabenhoehe != value)
                {
                    _dataModel.nabenhoehe = value;
                    RaisePropertyChanged("nabenhoehe");
                }
            }
        }

        public double Einschaltgeschwindigkeit
        {
            get { return _dataModel.einschaltgeschwindigkeit; }
            set
            {
                if (_dataModel.einschaltgeschwindigkeit != value)
                {
                    _dataModel.einschaltgeschwindigkeit = value;
                    RaisePropertyChanged("einschaltgeschwindigkeit");
                }
            }
        }

        public double Abschaltgeschwindigkeit
        {
            get { return _dataModel.abschaltgeschwindigkeit; }
            set
            {
                if (_dataModel.abschaltgeschwindigkeit != value)
                {
                    _dataModel.abschaltgeschwindigkeit = value;
                    RaisePropertyChanged("abschaltgeschwindigkeit");
                }
            }
        }

        public double Rotordurchmesser
        {
            get { return _dataModel.rotordurchmesser; }
            set
            {
                if (_dataModel.rotordurchmesser != value)
                {
                    _dataModel.rotordurchmesser = value;
                    RaisePropertyChanged("rotordurchmesser");
                }
            }
        }

        public double Eigenkapital
        {
            get { return _dataModel.eigenkapital; }
            set
            {
                if (_dataModel.eigenkapital != value)
                {
                    _dataModel.eigenkapital = value;
                    RaisePropertyChanged("eigenkapital");
                }
            }
        }

        public double Kredit
        {
            get { return _dataModel.kredit; }
            set
            {
                if (_dataModel.kredit != value)
                {
                    _dataModel.kredit = value;
                    RaisePropertyChanged("kredit");
                }
            }
        }

        public int Kreditlaufzeit
        {
            get { return _dataModel.kreditlaufzeit; }
            set
            {
                if (_dataModel.kreditlaufzeit != value)
                {
                    _dataModel.kreditlaufzeit = value;
                    RaisePropertyChanged("kreditlaufzeit");
                }
            }
        }

        public double Kreditzins
        {
            get { return _dataModel.kreditzins; }
            set
            {
                if (_dataModel.kreditzins != value)
                {
                    _dataModel.kreditzins = value;
                    RaisePropertyChanged("kreditzins");
                }
            }
        }

        public double Betriebskosten
        {
            get { return _dataModel.betriebskosten; }
            set
            {
                if (_dataModel.betriebskosten != value)
                {
                    _dataModel.betriebskosten = value;
                    RaisePropertyChanged("betriebskosten");
                }
            }
        }

        public double Einspeiseverguetung
        {
            get { return _dataModel.einspeiseverguetung; }
            set
            {
                if (_dataModel.einspeiseverguetung != value)
                {
                    _dataModel.einspeiseverguetung = value;
                    RaisePropertyChanged("einspeiseverguetung");
                }
            }
        }

        #endregion Variables

        #region Methods

        public void SwitchLocation()
        {
            switch (Standortvorgabe)
            {
                case 1:
                    Formfaktor = 0;
                    Skalierungsfaktor = 0;
                    Messhoehe = 0;
                    Jahreswindgeschwindigkeit = 0;
                    Rauhigkeitslaenge = 0;
                    break;

                case 2:
                    Formfaktor = 0;
                    Skalierungsfaktor = 0;
                    Messhoehe = 0;
                    Jahreswindgeschwindigkeit = 0;
                    Rauhigkeitslaenge = 0;
                    break;

                case 3:
                    Formfaktor = 2;
                    Skalierungsfaktor = 0;
                    Messhoehe = 30;
                    Jahreswindgeschwindigkeit = 5.5;
                    Rauhigkeitslaenge = 0.1;
                    break;

                default:
                    Formfaktor = 0;
                    Skalierungsfaktor = 0;
                    Messhoehe = 0;
                    Jahreswindgeschwindigkeit = 0;
                    Rauhigkeitslaenge = 0;
                    break;
            }
        }

        #endregion Methods

        #region Commands

        public ICommand StandortCommand
        {
            get;
            set;
        }

        public void Standort(object obj)
        {
            SwitchLocation();
        }

        #endregion Commands

        public InputViewModel()
        {
            #region NormalMode

            //_dataModel = new DataModel();

            #endregion NormalMode

            #region SingletonMode

            _dataModel = DataModel.GetInstance;

            #endregion SingletonMode

            StandortCommand = new RelayCommand(Standort);
        }
    }
}