using System.Collections.ObjectModel;

namespace Kleinwind.Model
{
    //Normally: public class DataModel
    public sealed class DataModel
    {
        #region ExamplesOfSingleton

        #region NoThreadSafeSingleton

        //private DataModel() { }
        //private static DataModel instance = null;
        //public static DataModel GetInstance
        //{
        //    get
        //    {
        //        if (instance == null)
        //        {
        //            instance = new DataModel();
        //        }
        //        return instance;
        //    }
        //}

        #endregion NoThreadSafeSingleton

        #region ThreadSafetySingleton

        //DataModel() { }
        //private static readonly object lock = new object ();
        //private static DataModel instance = null;
        //public static DataModel GetInstance
        //{
        //    get
        //    {
        //        lock (lock)
        //            {
        //                if (instance == null)
        //                {
        //                    instance = new DataModel();
        //                }
        //                return instance;
        //            }
        //    }
        //}

        #endregion ThreadSafetySingleton

        #region ThreadSafetySingletonUsingDoubleCheckLocking

        //DataModel() { }
        //private static readonly object lock = new object ();
        //private static DataModel instance = null;
        //public static DataModel GetInstance
        //{
        //    get
        //    {
        //        if (instance == null)
        //        {
        //            lock (lock)
        //                {
        //                    if (instance == null)
        //                    {
        //                        instance = new DataModel();
        //                    }
        //                }
        //        }
        //        return instance;
        //    }
        //}

        #endregion ThreadSafetySingletonUsingDoubleCheckLocking

        #region ThreadSafeSingletonWithoutUsingLocksAndNoLazyInstantiation

        //private static readonly DataModel instance = new DataModel();
        //static DataModel()
        //{
        //}
        //private DataModel()
        //{
        //}
        //public static DataModel GetInstance
        //{
        //    get
        //    {
        //        return instance;
        //    }
        //}

        #endregion ThreadSafeSingletonWithoutUsingLocksAndNoLazyInstantiation

        #region UsingLazy<T>Type

        //private DataModel()
        //{
        //}
        //private static readonly Lazy<DataModel> lazy = new Lazy<DataModel>(() => new DataModel());
        //public static DataModel GetInstance
        //{
        //    get
        //    {
        //        return lazy.Value;
        //    }
        //}

        #endregion UsingLazy<T>Type

        #endregion ExamplesOfSingleton

        #region ThreadSafeSingletonWithoutUsingLocksAndNoLazyInstantiation

        private static readonly DataModel instance = new DataModel();

        static DataModel()
        {
        }

        private DataModel()
        {
        }

        public static DataModel GetInstance
        {
            get
            {
                return instance;
            }
        }

        #endregion ThreadSafeSingletonWithoutUsingLocksAndNoLazyInstantiation

        #region Input-Variables

        public double abschaltgeschwindigkeit { get; set; }
        public double betriebskosten { get; set; }
        public double eigenkapital { get; set; }
        public double einschaltgeschwindigkeit { get; set; }
        public double einspeiseverguetung { get; set; }
        public double formfaktor { get; set; }
        public double jahreswindgeschwindigkeit { get; set; }
        public double kredit { get; set; }
        public int kreditlaufzeit { get; set; }
        public double kreditzins { get; set; }
        public double messhoehe { get; set; }
        public double nabenhoehe { get; set; }
        public double nenngeschwindigkeit { get; set; }
        public double nennleistung { get; set; }
        public int projektlaufzeit { get; set; }
        public string? projektname { get; set; }
        public double rauhigkeitslaenge { get; set; }
        public double rotordurchmesser { get; set; }
        public double skalierungsfaktor { get; set; }
        public int standortvorgabe { get; set; }
        public double verfuegbarkeit { get; set; }
        #endregion Input-Variables

        #region WindVariables

        public ObservableCollection<int> liste_windgeschwindigkeit { get; set; }
        public ObservableCollection<double> liste_windhaeufigkeit { get; set; }
        public ObservableCollection<double> liste_windstundenanteil { get; set; }

        #endregion WindVariables

        #region PerformanceVariables

        public ObservableCollection<double> liste_leistungskurve;

        #endregion PerformanceVariables

        #region EnergieVariables

        public double leistungsbeiwert { get; set; }
        public ObservableCollection<double> liste_realertrag { get; set; }
        public ObservableCollection<double> liste_theoertrag { get; set; }
        public double luftdichte { get; set; }
        public double realertragsumme { get; set; }
        public double theoertragsumme { get; set; }
        #endregion EnergieVariables

        #region OutputVariables

        public double eigenkapitalrate { get; set; }
        public double eigenkapitalrendite { get; set; }
        public double endeigenkapitalrendite { get; set; }
        public double endkapital { get; set; }
        public double ertragsinvestitionskostenindex { get; set; }
        public double investitionskosten { get; set; }
        public double leistungsinvestitionskostenindex { get; set; }
        public ObservableCollection<double> liste_jahresausgaben { get; set; }
        public ObservableCollection<double> liste_jahresbetriebskosten { get; set; }
        public ObservableCollection<double> liste_jahreseigenkapitalrendite { get; set; }
        public ObservableCollection<double> liste_jahreseinnahmen { get; set; }
        public ObservableCollection<double> liste_jahresgewinn { get; set; }
        public ObservableCollection<double> liste_jahresgewinnkumuliert { get; set; }
        public ObservableCollection<double> liste_jahreskreditrate { get; set; }
        public ObservableCollection<double> liste_jahreskredittilgung { get; set; }
        public ObservableCollection<double> liste_jahreskreditzinsen { get; set; }
        public ObservableCollection<double> liste_jahresstrommenge { get; set; }
        public ObservableCollection<int> liste_projektjahre { get; set; }
        public double stromgestehungskosten { get; set; }
        public double volllaststunden { get; set; }
        #endregion OutputVariables
    }
}