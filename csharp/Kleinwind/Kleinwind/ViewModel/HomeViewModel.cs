using Kleinwind.Helper;
using Kleinwind.Model;
using System.Collections.ObjectModel;
using System.Windows.Input;

namespace Kleinwind.ViewModel
{
    public class HomeViewModel : BaseViewModel
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

        public double Eigenkapitalrate
        {
            get { return _dataModel.eigenkapitalrate; }
            set
            {
                if (_dataModel.eigenkapitalrate != value)
                {
                    _dataModel.eigenkapitalrate = value;
                    RaisePropertyChanged("eigenkapitalrate");
                }
            }
        }

        public double Eigenkapitalrendite
        {
            get { return _dataModel.eigenkapitalrendite; }
            set
            {
                if (_dataModel.eigenkapitalrendite != value)
                {
                    _dataModel.eigenkapitalrendite = value;
                    RaisePropertyChanged("eigenkapitalrendite");
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

        public double Endeigenkapitalrendite
        {
            get { return _dataModel.endeigenkapitalrendite; }
            set
            {
                if (_dataModel.endeigenkapitalrendite != value)
                {
                    _dataModel.endeigenkapitalrendite = value;
                    RaisePropertyChanged("endeigenkapitalrendite");
                }
            }
        }

        public double Endkapital
        {
            get { return _dataModel.endkapital; }
            set
            {
                if (_dataModel.endkapital != value)
                {
                    _dataModel.endkapital = value;
                    RaisePropertyChanged("endkapital");
                }
            }
        }

        public double Ertragsinvestitionskostenindex
        {
            get { return _dataModel.ertragsinvestitionskostenindex; }
            set
            {
                if (_dataModel.ertragsinvestitionskostenindex != value)
                {
                    _dataModel.ertragsinvestitionskostenindex = value;
                    RaisePropertyChanged("ertragsinvestitionskostenindex");
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

        public double Investitionskosten
        {
            get { return _dataModel.investitionskosten; }
            set
            {
                if (_dataModel.investitionskosten != value)
                {
                    _dataModel.investitionskosten = value;
                    RaisePropertyChanged("investitionskosten");
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

        public double Leistungsbeiwert
        {
            get { return _dataModel.leistungsbeiwert; }
            set
            {
                if (_dataModel.leistungsbeiwert != value)
                {
                    _dataModel.leistungsbeiwert = value;
                    RaisePropertyChanged("leistungsbeiwert");
                }
            }
        }

        public double Leistungsinvestitionskostenindex
        {
            get { return _dataModel.leistungsinvestitionskostenindex; }
            set
            {
                if (_dataModel.leistungsinvestitionskostenindex != value)
                {
                    _dataModel.leistungsinvestitionskostenindex = value;
                    RaisePropertyChanged("leistungsinvestitionskostenindex");
                }
            }
        }

        public ObservableCollection<double> Liste_jahresausgaben
        {
            get { return _dataModel.liste_jahresausgaben; }
            set
            {
                if (_dataModel.liste_jahresausgaben != value)
                {
                    _dataModel.liste_jahresausgaben = value;
                    RaisePropertyChanged("liste_jahresausgaben");
                }
            }
        }

        public ObservableCollection<double> Liste_jahresbetriebskosten
        {
            get { return _dataModel.liste_jahresbetriebskosten; }
            set
            {
                if (_dataModel.liste_jahresbetriebskosten != value)
                {
                    _dataModel.liste_jahresbetriebskosten = value;
                    RaisePropertyChanged("liste_jahresbetriebskosten");
                }
            }
        }

        public ObservableCollection<double> Liste_jahreseigenkapitalrendite
        {
            get { return _dataModel.liste_jahreseigenkapitalrendite; }
            set
            {
                if (_dataModel.liste_jahreseigenkapitalrendite != value)
                {
                    _dataModel.liste_jahreseigenkapitalrendite = value;
                    RaisePropertyChanged("liste_jahreseigenkapitalrendite");
                }
            }
        }

        public ObservableCollection<double> Liste_jahreseinnahmen
        {
            get { return _dataModel.liste_jahreseinnahmen; }
            set
            {
                if (_dataModel.liste_jahreseinnahmen != value)
                {
                    _dataModel.liste_jahreseinnahmen = value;
                    RaisePropertyChanged("liste_jahreseinnahmen");
                }
            }
        }

        public ObservableCollection<double> Liste_jahresgewinn
        {
            get { return _dataModel.liste_jahresgewinn; }
            set
            {
                if (_dataModel.liste_jahresgewinn != value)
                {
                    _dataModel.liste_jahresgewinn = value;
                    RaisePropertyChanged("liste_jahresgewinn");
                }
            }
        }

        public ObservableCollection<double> Liste_jahresgewinnkumuliert
        {
            get { return _dataModel.liste_jahresgewinnkumuliert; }
            set
            {
                if (_dataModel.liste_jahresgewinnkumuliert != value)
                {
                    _dataModel.liste_jahresgewinnkumuliert = value;
                    RaisePropertyChanged("liste_jahresgewinnkumuliert");
                }
            }
        }

        public ObservableCollection<double> Liste_jahreskreditrate
        {
            get { return _dataModel.liste_jahreskreditrate; }
            set
            {
                if (_dataModel.liste_jahreskreditrate != value)
                {
                    _dataModel.liste_jahreskreditrate = value;
                    RaisePropertyChanged("liste_jahreskreditrate");
                }
            }
        }

        public ObservableCollection<double> Liste_jahreskredittilgung
        {
            get { return _dataModel.liste_jahreskredittilgung; }
            set
            {
                if (_dataModel.liste_jahreskredittilgung != value)
                {
                    _dataModel.liste_jahreskredittilgung = value;
                    RaisePropertyChanged("liste_jahreskredittilgung");
                }
            }
        }

        public ObservableCollection<double> Liste_jahreskreditzinsen
        {
            get { return _dataModel.liste_jahreskreditzinsen; }
            set
            {
                if (_dataModel.liste_jahreskreditzinsen != value)
                {
                    _dataModel.liste_jahreskreditzinsen = value;
                    RaisePropertyChanged("liste_jahreskreditzinsen");
                }
            }
        }

        public ObservableCollection<double> Liste_jahresstrommenge
        {
            get { return _dataModel.liste_jahresstrommenge; }
            set
            {
                if (_dataModel.liste_jahresstrommenge != value)
                {
                    _dataModel.liste_jahresstrommenge = value;
                    RaisePropertyChanged("liste_jahresstrommenge");
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

        public ObservableCollection<double> Liste_realertrag
        {
            get { return _dataModel.liste_realertrag; }
            set
            {
                if (_dataModel.liste_realertrag != value)
                {
                    _dataModel.liste_realertrag = value;
                    RaisePropertyChanged("liste_realertrag");
                }
            }
        }

        public ObservableCollection<int> Liste_projektjahre
        {
            get { return _dataModel.liste_projektjahre; }
            set
            {
                if (_dataModel.liste_projektjahre != value)
                {
                    _dataModel.liste_projektjahre = value;
                    RaisePropertyChanged("liste_projektjahre");
                }
            }
        }

        public ObservableCollection<double> Liste_theoertrag
        {
            get { return _dataModel.liste_theoertrag; }
            set
            {
                if (_dataModel.liste_theoertrag != value)
                {
                    _dataModel.liste_theoertrag = value;
                    RaisePropertyChanged("liste_theoertrag");
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

        public ObservableCollection<double> Liste_windhaeufigkeit
        {
            get { return _dataModel.liste_windhaeufigkeit; }
            set
            {
                if (_dataModel.liste_windhaeufigkeit != value)
                {
                    _dataModel.liste_windhaeufigkeit = value;
                    RaisePropertyChanged("liste_windhaeufigkeit");
                }
            }
        }

        public ObservableCollection<double> Liste_windstundenanteil
        {
            get { return _dataModel.liste_windstundenanteil; }
            set
            {
                if (_dataModel.liste_windstundenanteil != value)
                {
                    _dataModel.liste_windstundenanteil = value;
                    RaisePropertyChanged("liste_windstundenanteil");
                }
            }
        }

        public double Luftdichte
        {
            get { return _dataModel.luftdichte; }
            set
            {
                if (_dataModel.luftdichte != value)
                {
                    _dataModel.luftdichte = value;
                    RaisePropertyChanged("luftdichte");
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

        public double Realertragsumme
        {
            get { return _dataModel.realertragsumme; }
            set
            {
                if (_dataModel.realertragsumme != value)
                {
                    _dataModel.realertragsumme = value;
                    RaisePropertyChanged("realertragsumme");
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
                }
            }
        }

        public double Stromgestehungskosten
        {
            get { return _dataModel.stromgestehungskosten; }
            set
            {
                if (_dataModel.stromgestehungskosten != value)
                {
                    _dataModel.stromgestehungskosten = value;
                    RaisePropertyChanged("stromgestehungskosten");
                }
            }
        }

        public double Theoertragsumme
        {
            get { return _dataModel.theoertragsumme; }
            set
            {
                if (_dataModel.theoertragsumme != value)
                {
                    _dataModel.theoertragsumme = value;
                    RaisePropertyChanged("theoertragsumme");
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

        public double Volllaststunden
        {
            get { return _dataModel.volllaststunden; }
            set
            {
                if (_dataModel.volllaststunden != value)
                {
                    _dataModel.volllaststunden = value;
                    RaisePropertyChanged("volllaststunden");
                }
            }
        }

        #endregion Variables

        #region Methods

        public void ExampleProject()
        {
            Abschaltgeschwindigkeit = 20;
            Betriebskosten = 180;
            Eigenkapital = 3000;
            Eigenkapitalrate = 0;
            Eigenkapitalrendite = 0;
            Einschaltgeschwindigkeit = 3;
            Einspeiseverguetung = 0.09;
            Endeigenkapitalrendite = 0;
            Endkapital = 0;
            Ertragsinvestitionskostenindex = 0;
            Formfaktor = 2;
            Investitionskosten = 0;
            Jahreswindgeschwindigkeit = 5.6;
            Kredit = 3000;
            Kreditlaufzeit = 5;
            Kreditzins = 4;
            Leistungsbeiwert = 0;
            Leistungsinvestitionskostenindex = 0;
            Liste_jahresausgaben = new ObservableCollection<double>() { };
            Liste_jahresbetriebskosten = new ObservableCollection<double>() { };
            Liste_jahreseigenkapitalrendite = new ObservableCollection<double>() { };
            Liste_jahreseinnahmen = new ObservableCollection<double>() { };
            Liste_jahresgewinn = new ObservableCollection<double>() { };
            Liste_jahresgewinnkumuliert = new ObservableCollection<double>() { };
            Liste_jahreskreditrate = new ObservableCollection<double>() { };
            Liste_jahreskredittilgung = new ObservableCollection<double>() { };
            Liste_jahreskreditzinsen = new ObservableCollection<double>() { };
            Liste_jahresstrommenge = new ObservableCollection<double>() { };
            Liste_leistungskurve = new ObservableCollection<double>() { 0, 0, 65, 220, 470, 845, 1255, 1625, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 2000, 0, 0, 0, 0, 0, 0 }; Liste_realertrag = new  ObservableCollection<double>() { };
            Liste_projektjahre = new ObservableCollection<int>() { };
            Liste_theoertrag = new ObservableCollection<double>() { };
            Liste_windgeschwindigkeit = new ObservableCollection<int>() { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25 };
            Liste_windhaeufigkeit = new ObservableCollection<double>() { };
            Liste_windstundenanteil = new ObservableCollection<double>() { };
            Luftdichte = 1.25;
            Messhoehe = 30;
            Nabenhoehe = 10;
            Nenngeschwindigkeit = 9;
            Nennleistung = 2;
            Projektlaufzeit = 20;
            Projektname = "ExampleProject";
            Rauhigkeitslaenge = 0.1;
            Realertragsumme = 0;
            Rotordurchmesser = 4;
            Skalierungsfaktor = 0;
            Standortvorgabe = -1;
            Stromgestehungskosten = 0;
            Theoertragsumme = 0;
            Verfuegbarkeit = 98.0;
            Volllaststunden = 0;
        }

        public void NewProject()
        {
            Abschaltgeschwindigkeit = 0;
            Betriebskosten = 0;
            Eigenkapital = 0;
            Eigenkapitalrate = 0;
            Eigenkapitalrendite = 0;
            Einschaltgeschwindigkeit = 0;
            Einspeiseverguetung = 0;
            Endeigenkapitalrendite = 0;
            Endkapital = 0;
            Ertragsinvestitionskostenindex = 0;
            Formfaktor = 0;
            Investitionskosten = 0;
            Jahreswindgeschwindigkeit = 0;
            Kredit = 0;
            Kreditlaufzeit = 0;
            Kreditzins = 0;
            Leistungsbeiwert = 0;
            Leistungsinvestitionskostenindex = 0;
            Liste_jahresausgaben = new ObservableCollection<double>() { };
            Liste_jahresbetriebskosten = new ObservableCollection<double>() { };
            Liste_jahreseigenkapitalrendite = new ObservableCollection<double>() { };
            Liste_jahreseinnahmen = new ObservableCollection<double>() { };
            Liste_jahresgewinn = new ObservableCollection<double>() { };
            Liste_jahresgewinnkumuliert = new ObservableCollection<double>() { };
            Liste_jahreskreditrate = new ObservableCollection<double>() { };
            Liste_jahreskredittilgung = new ObservableCollection<double>() { };
            Liste_jahreskreditzinsen = new ObservableCollection<double>() { };
            Liste_jahresstrommenge = new ObservableCollection<double>() { };
            Liste_leistungskurve = new ObservableCollection<double> { 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0 };
            Liste_realertrag = new ObservableCollection<double>() { };
            Liste_projektjahre = new ObservableCollection<int>() { };
            Liste_theoertrag = new ObservableCollection<double>() { };
            Liste_windgeschwindigkeit = new ObservableCollection<int>() { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25 };
            Liste_windhaeufigkeit = new ObservableCollection<double>() { };
            Liste_windstundenanteil = new ObservableCollection<double>() { };
            Luftdichte = 1.25;
            Messhoehe = 0;
            Nabenhoehe = 0;
            Nenngeschwindigkeit = 0;
            Nennleistung = 0;
            Projektlaufzeit = 0;
            Projektname = "NeuesProjekt";
            Rauhigkeitslaenge = 0;
            Realertragsumme = 0;
            Rotordurchmesser = 0;
            Skalierungsfaktor = 0;
            Standortvorgabe = -1;
            Stromgestehungskosten = 0;
            Theoertragsumme = 0;
            Verfuegbarkeit = 0;
            Volllaststunden = 0;
        }

        #endregion Methods

        #region Commands

        public ICommand BeispielProjektCommand
        {
            get;
            set;
        }

        public ICommand NeuesProjektCommand
        {
            get;
            set;
        }

        public void BeispielProjekt(object obj)
        {
            ExampleProject();
        }

        public void NeuesProjekt(object obj)
        {
            NewProject();
        }

        #endregion Commands

        public HomeViewModel()
        {
            #region NormalMode

            //_dataModel = new DataModel();

            #endregion NormalMode

            #region SingletonMode

            _dataModel = DataModel.GetInstance;

            #endregion SingletonMode

            NeuesProjektCommand = new RelayCommand(NeuesProjekt);
            BeispielProjektCommand = new RelayCommand(BeispielProjekt);
        }
    }
}