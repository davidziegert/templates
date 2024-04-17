using Kleinwind.Helper;
using Kleinwind.Model;
using OxyPlot;
using OxyPlot.Series;
using System.Collections.ObjectModel;

namespace Kleinwind.ViewModel
{
    public class EnergieViewModel : BaseViewModel
    {
        private DataModel _dataModel;

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

        #endregion Variables

        #region Methods

        public void CalcTheoertrag()
        {
            int i = 0;
            int x = 0;

            while (i < 25)
            {
                x = i + 1;
                Liste_theoertrag[i] = _dataModel.liste_leistungskurve[i] * (_dataModel.liste_windstundenanteil[i] / 1000);
                i++;
            }
        }

        public void CalcRealertrag()
        {
            int i = 0;
            int x = 0;

            while (i < 25)
            {
                x = i + 1;
                Liste_realertrag[i] = _dataModel.liste_theoertrag[i] * (_dataModel.verfuegbarkeit / 100);
                i++;
            }
        }

        public void CalcTheoertragsumme()
        {
            Theoertragsumme = Liste_theoertrag.AsQueryable().Sum();
        }

        public void CalcRealertragsumme()
        {
            Realertragsumme = Liste_realertrag.AsQueryable().Sum();
        }

        public void CalcLeistungsbeiwert()
        {
            Leistungsbeiwert = (8 * (_dataModel.nennleistung * 1000)) / (_dataModel.luftdichte * Math.Pow(_dataModel.nenngeschwindigkeit, 3) * Math.Pow(_dataModel.rotordurchmesser, 2) * 3.14);
        }

        public void MakePlot()
        {
            var lineSeries = new LineSeries();

            int i = 0;
            int x;

            while (i < 25)
            {
                x = i + 1;

                lineSeries.Points.Add(new DataPoint(Liste_windgeschwindigkeit[i], Liste_realertrag[i]));
                i++;
            }

            this.MyPlot.Series.Clear();
            this.MyPlot.ResetAllAxes();
            this.MyPlot.Series.Add(lineSeries);
            this.MyPlot.InvalidatePlot(true);
        }

        #endregion Methods

        public EnergieViewModel()
        {
            #region NormalMode

            //_dataModel = new DataModel();

            #endregion NormalMode

            #region SingletonMode

            _dataModel = DataModel.GetInstance;

            #endregion SingletonMode

            MyPlot = new PlotModel { Title = "Realer Energieertrag in kWh pro Jahr" };

            CalcTheoertrag();
            CalcRealertrag();
            CalcTheoertragsumme();
            CalcRealertragsumme();
            CalcLeistungsbeiwert();
            MakePlot();
        }
    }
}