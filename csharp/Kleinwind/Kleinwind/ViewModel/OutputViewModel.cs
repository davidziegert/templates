using Kleinwind.Helper;
using Kleinwind.Model;
using OxyPlot;
using OxyPlot.Series;
using System.Collections.ObjectModel;

namespace Kleinwind.ViewModel
{
    public class OutputViewModel : BaseViewModel
    {
        private DataModel _dataModel;

        #region OxyPlot

        public PlotModel MyPlot { get; private set; }

        #endregion OxyPlot

        #region Variables

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

        public double Investionskosten
        {
            get { return Eigenkapital + Kredit; }
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

        public double Leistungsinvestitionskostenindex
        {
            get { return Investionskosten / Nennleistung; }
        }

        public double Ertragsinvestitionskostenindex
        {
            get { return Investionskosten / Realertragsumme; }
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

        public double Eigenkapitalrate
        {
            get { return Eigenkapital / Projektlaufzeit; }
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

        public ObservableCollection<int> Liste_tabellenjahre
        {
            get { return _dataModel.liste_tabellenjahre; }
            set
            {
                if (_dataModel.liste_tabellenjahre != value)
                {
                    _dataModel.liste_tabellenjahre = value;
                    RaisePropertyChanged("liste_tabellenjahre");
                }
            }
        }

        #endregion Variables

        #region Methoden

        public void MakeDetails()
        {
            int _projektjahr = 1;
            int _kreditjahr = 1;

            while (_kreditjahr <= Kreditlaufzeit)
            {
                if (Kredit == 0)
                {
                    Liste_jahreskredittilgung[_kreditjahr - 1] = 0;
                }
                else
                {
                    Liste_jahreskredittilgung[_kreditjahr - 1] = Kredit * Kreditzins / 100 * (Math.Pow((1 + Kreditzins / 100), _kreditjahr - 1)) / ((Math.Pow((1 + Kreditzins / 100), Kreditlaufzeit)) - 1);
                }

                if (Kreditzins == 0)
                {
                    Liste_jahreskreditzinsen[_kreditjahr - 1] = 0;
                }
                else
                {
                    Liste_jahreskreditzinsen[_kreditjahr - 1] = ((Kredit * (Kreditzins / 100) * (Math.Pow(1 + Kreditzins / 100, Kreditlaufzeit) - (Math.Pow(1 + Kreditzins / 100, _kreditjahr - 1))) / (Math.Pow(1 + Kreditzins / 100, Kreditlaufzeit) - 1)));
                }

                if (Kredit == 0)
                {
                    Liste_jahreskreditrate[_kreditjahr - 1] = 0;
                }
                else
                {
                    Liste_jahreskreditrate[_kreditjahr - 1] = Liste_jahreskredittilgung[_kreditjahr - 1] + Liste_jahreskreditzinsen[_kreditjahr - 1];
                }

                _kreditjahr++;
            }

            while (_projektjahr <= Projektlaufzeit)
            {
                Liste_jahresstrommenge[_projektjahr - 1] = Realertragsumme;

                Liste_jahresbetriebskosten[_projektjahr - 1] = Betriebskosten;

                Liste_jahresausgaben[_projektjahr - 1] = Liste_jahreskreditrate[_projektjahr - 1] + Betriebskosten;

                Liste_jahreseinnahmen[_projektjahr - 1] = Realertragsumme * Einspeiseverguetung;

                Liste_jahresgewinn[_projektjahr - 1] = Liste_jahreseinnahmen[_projektjahr - 1] - Liste_jahresausgaben[_projektjahr - 1];

                if (_projektjahr == 1) { Liste_jahresgewinnkumuliert[_projektjahr - 1] = 0 + Liste_jahresgewinn[_projektjahr - 1]; }
                else { Liste_jahresgewinnkumuliert[_projektjahr - 1] = Liste_jahresgewinnkumuliert[_projektjahr - 2] + Liste_jahresgewinn[_projektjahr - 1]; }

                if (_projektjahr == 1) { Liste_jahreseigenkapitalrendite[_projektjahr - 1] = (Eigenkapital * -1) + Eigenkapitalrate; }
                if (_projektjahr != 1) { Liste_jahreseigenkapitalrendite[_projektjahr - 1] = Liste_jahreseigenkapitalrendite[_projektjahr - 2] + Eigenkapitalrate; }
                if (_projektjahr == Projektlaufzeit) { Endeigenkapitalrendite = Liste_jahreseigenkapitalrendite[_projektjahr - 1]; }

                _projektjahr++;
            }

            Volllaststunden = Realertragsumme / Nennleistung;

            Stromgestehungskosten = (Liste_jahresausgaben.AsQueryable().Sum() / Projektlaufzeit) / Realertragsumme;

            Endkapital = Eigenkapital + Liste_jahresgewinnkumuliert[Projektlaufzeit - 1] + Liste_jahreseigenkapitalrendite[Projektlaufzeit - 1];

            double x = Endkapital / Eigenkapital;
            double y = 1 / Convert.ToDouble(Projektlaufzeit);

            Eigenkapitalrendite = (Math.Pow(x, y) - 1) * 100;

            Endeigenkapitalrendite = (Endkapital / Eigenkapital * 100) - 100;
        }

        public void MakePlot()
        {
            var lineSeries = new LineSeries();

            int i = 0;
            int x;

            while (i < Projektlaufzeit)
            {
                x = i + 1;

                lineSeries.Points.Add(new DataPoint(Liste_tabellenjahre[i], Liste_jahresgewinnkumuliert[i]));
                i++;
            }

            this.MyPlot.Series.Clear();
            this.MyPlot.ResetAllAxes();
            this.MyPlot.Series.Add(lineSeries);
            this.MyPlot.InvalidatePlot(true);
        }

        #endregion Methoden

        public OutputViewModel()
        {
            #region NormalMode

            //_dataModel = new DataModel();

            #endregion NormalMode

            #region SingletonMode

            _dataModel = DataModel.GetInstance;

            #endregion SingletonMode

            MyPlot = new PlotModel { Title = "Gewinn in € (kumuliert) pro Jahr" };

            MakeDetails();
            MakePlot();
        }
    }
}