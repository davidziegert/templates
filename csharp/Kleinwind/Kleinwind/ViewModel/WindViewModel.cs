using Kleinwind.Helper;
using Kleinwind.Model;
using OxyPlot;
using OxyPlot.Series;
using System.Collections.ObjectModel;

namespace Kleinwind.ViewModel
{
    public class WindViewModel : BaseViewModel
    {
        private DataModel _dataModel;

        #region Temp

        private double FaktorX;
        private double WindgeschwindigkeitX;

        #endregion Temp

        #region OxyPlot

        public PlotModel MyPlot { get; private set; }

        #endregion OxyPlot

        #region Variables

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

        #endregion Variables

        #region Methods

        public void Weibull()
        {
            double y1 = Nabenhoehe / Rauhigkeitslaenge;
            double y2 = Messhoehe / Rauhigkeitslaenge;
            double y3 = Math.Log(y1);
            double y4 = Math.Log(y2);

            double z = (0.568 + (0.434 / Formfaktor));
            double p = (1 / Formfaktor);
            double y5 = Math.Pow(z, p);

            WindgeschwindigkeitX = Jahreswindgeschwindigkeit * (y3 / y4);

            if (Skalierungsfaktor > 0)
            {
                FaktorX = Skalierungsfaktor;
            }
            else
            {
                FaktorX = WindgeschwindigkeitX / y5;
            }
        }

        public void Windhaufigkeit()
        {
            Weibull();

            int i = 0;
            int x;

            while (i < 25)
            {
                x = i + 1;
                Liste_windhaeufigkeit[i] = ((Formfaktor / FaktorX) * (Math.Pow((x / FaktorX), (Formfaktor - 1)) * Math.Exp(-(Math.Pow((x / FaktorX), Formfaktor))))) * 100;
                i++;
            }
        }

        public void Windstunden()
        {
            Windhaufigkeit();

            int i = 0;
            int x;

            while (i < 25)
            {
                x = i + 1;
                Liste_windstundenanteil[i] = Liste_windhaeufigkeit[i] * 8760 / 100;
                i++;
            }
        }

        public void MakePlot()
        {
            var lineSeries = new LineSeries();

            int i = 0;
            int x;

            while (i < 25)
            {
                x = i + 1;

                lineSeries.Points.Add(new DataPoint(Liste_windgeschwindigkeit[i], Liste_windhaeufigkeit[i]));
                i++;
            }

            this.MyPlot.Series.Clear();
            this.MyPlot.ResetAllAxes();
            this.MyPlot.Series.Add(lineSeries);
            this.MyPlot.InvalidatePlot(true);
        }

        #endregion Methods

        public WindViewModel()
        {
            #region NormalMode

            //_dataModel = new DataModel();

            #endregion NormalMode

            #region SingletonMode

            _dataModel = DataModel.GetInstance;

            #endregion SingletonMode

            MyPlot = new PlotModel { Title = "Windhäufigkeitsverteilung" };

            Windstunden();
            MakePlot();
        }
    }
}