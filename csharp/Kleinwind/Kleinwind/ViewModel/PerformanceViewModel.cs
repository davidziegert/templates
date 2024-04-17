using Kleinwind.Helper;
using Kleinwind.Model;
using OxyPlot;
using OxyPlot.Series;
using System.Collections.ObjectModel;
using System.Windows.Input;

namespace Kleinwind.ViewModel
{
    public class PerformanceViewModel : BaseViewModel
    {
        private DataModel _dataModel;

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

        #endregion Variables

        #region OxyPlot

        public PlotModel MyPlot { get; private set; }

        #endregion OxyPlot

        #region Methods

        public void MakePlot()
        {
            var lineSeries = new LineSeries();

            int i = 0;
            int x;

            while (i < 25)
            {
                x = i + 1;

                lineSeries.Points.Add(new DataPoint(Liste_windgeschwindigkeit[i], Liste_leistungskurve[i]));
                i++;
            }

            this.MyPlot.Series.Clear();
            this.MyPlot.ResetAllAxes();
            this.MyPlot.Series.Add(lineSeries);
            this.MyPlot.InvalidatePlot(true);
        }

        public void CalcPerfomance()
        {
            int i = 0;
            int x = 0;

            while (i < 25)
            {
                x = i + 1;

                if (x < _dataModel.einschaltgeschwindigkeit)
                {
                    Liste_leistungskurve[i] = 0;
                }
                else
                {
                    if (x >= _dataModel.abschaltgeschwindigkeit)
                    {
                        Liste_leistungskurve[i] = 0;
                    }
                    else
                    {
                        if (x >= _dataModel.nenngeschwindigkeit) { Liste_leistungskurve[i] = _dataModel.nennleistung * 1000; } else { Liste_leistungskurve[i] = _dataModel.nennleistung * 1000 * Math.Pow(x, 3) / Math.Pow(_dataModel.nenngeschwindigkeit, 3); }
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

        public ICommand UpdatePlotCommand
        {
            get;
            set;
        }

        public void UpdatePlot(object obj)
        {
            MakePlot();
        }

        #endregion Commands

        public PerformanceViewModel()
        {
            #region NormalMode

            //_dataModel = new DataModel();

            #endregion NormalMode

            #region SingletonMode

            _dataModel = DataModel.GetInstance;

            #endregion SingletonMode

            LeistungskurveCommand = new RelayCommand(Leistungskurve);
            UpdatePlotCommand = new RelayCommand(UpdatePlot);

            MyPlot = new PlotModel { Title = "Leistungskurve" };
        }
    }
}