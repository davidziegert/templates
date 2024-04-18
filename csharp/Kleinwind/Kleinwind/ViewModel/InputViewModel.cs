using Kleinwind.Helper;
using Kleinwind.Model;
using System.Collections.ObjectModel;
using System.Windows.Input;

namespace Kleinwind.ViewModel
{
    public class InputViewModel : BaseViewModel
    {
        private DataModel _dataModel;

        #region Variables

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

        public ObservableCollection<double> Liste_leistungskurve
        {
            get { return _dataModel.liste_leistungskurve; }
            set
            {
                if (_dataModel.liste_leistungskurve != value)
                {
                    _dataModel.liste_leistungskurve = value;
                    RaisePropertyChanged("liste_leistungskurve");
                }
            }
        }

        public ObservableCollection<int> Liste_windgeschwindigkeit
        {
            get { return _dataModel.liste_windgeschwindigkeit; }
            set
            {
                if (_dataModel.liste_windgeschwindigkeit != value)
                {
                    _dataModel.liste_windgeschwindigkeit = value;
                    RaisePropertyChanged("liste_windgeschwindigkeit");
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
                        case 0:
                            Formfaktor = 0;
                            Skalierungsfaktor = 0;
                            Messhoehe = 0;
                            Jahreswindgeschwindigkeit = 0;
                            Rauhigkeitslaenge = 0;
                            break;

                        case 1:
                            Formfaktor = 0;
                            Skalierungsfaktor = 0;
                            Messhoehe = 0;
                            Jahreswindgeschwindigkeit = 0;
                            Rauhigkeitslaenge = 0;
                            break;

                        case 2:
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

        #endregion Variables

        #region Methods

        public void CalcPerfomance()
        {
            int i = 0;
            int x = 0;

            while (i < 25)
            {
                x = i + 1;

                if (x < Einschaltgeschwindigkeit)
                {
                    Liste_leistungskurve[i] = 0;
                }
                else
                {
                    if (x >= Abschaltgeschwindigkeit)
                    {
                        Liste_leistungskurve[i] = 0;
                    }
                    else
                    {
                        if (x >= Nenngeschwindigkeit) { Liste_leistungskurve[i] = Nennleistung * 1000; } else { Liste_leistungskurve[i] = Nennleistung * 1000 * Math.Pow(x, 3) / Math.Pow(Nenngeschwindigkeit, 3); }
                    }
                }

                i++;
            }
        }

        #endregion Methods

        #region Commands

        public ICommand LeistungskurveCommand
        {
            get;
            set;
        }

        public void Leistungskurve(object obj)
        {
            CalcPerfomance();
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

            LeistungskurveCommand = new RelayCommand(Leistungskurve);
        }
    }
}