using System.Windows;
using System.Diagnostics;


namespace Tools.Helper
{
    public class BackgroundTask
    {
        private readonly PeriodicTimer _periodticTimer;
        private readonly CancellationTokenSource _cancellationTokenSource = new CancellationTokenSource();
        private Task? _timerTask;

        public BackgroundTask(TimeSpan _repeatSpan)
        {
            _periodticTimer = new PeriodicTimer(_repeatSpan);
        }

        public void Start(Stopwatch _externalwatch)
        {
            _timerTask = DoWorkAsync(_externalwatch);
        }

        private async Task DoWorkAsync(Stopwatch _externalwatch)
        {
            try
            {
                while (await _periodticTimer.WaitForNextTickAsync(_cancellationTokenSource.Token))
                {
                    if (_externalwatch.Elapsed.TotalMilliseconds > 5000)
                    {
                        MessageBox.Show("5 Seconds are over!");
                        _externalwatch.Restart();
                        //savedate & shufflenew
                    };
                }
            }
            catch (OperationCanceledException)
            {
            }
        }

        public async Task StopAsync()
        {
            if (_timerTask is null)
            {
                return;
            }
            else
            {
                _cancellationTokenSource.Cancel();
                await _timerTask;
                _cancellationTokenSource.Dispose();
                Console.WriteLine("Task was canceled");
            }
        }
    }
}