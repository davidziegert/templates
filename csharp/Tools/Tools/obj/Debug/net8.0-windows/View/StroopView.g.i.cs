﻿#pragma checksum "..\..\..\..\View\StroopView.xaml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "17588B0E01E167B3E8679FD1746A41F7242C2E36"
//------------------------------------------------------------------------------
// <auto-generated>
//     Dieser Code wurde von einem Tool generiert.
//     Laufzeitversion:4.0.30319.42000
//
//     Änderungen an dieser Datei können falsches Verhalten verursachen und gehen verloren, wenn
//     der Code erneut generiert wird.
// </auto-generated>
//------------------------------------------------------------------------------

using System;
using System.Diagnostics;
using System.Windows;
using System.Windows.Automation;
using System.Windows.Controls;
using System.Windows.Controls.Primitives;
using System.Windows.Controls.Ribbon;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Ink;
using System.Windows.Input;
using System.Windows.Markup;
using System.Windows.Media;
using System.Windows.Media.Animation;
using System.Windows.Media.Effects;
using System.Windows.Media.Imaging;
using System.Windows.Media.Media3D;
using System.Windows.Media.TextFormatting;
using System.Windows.Navigation;
using System.Windows.Shapes;
using System.Windows.Shell;
using Tools.View;
using Tools.ViewModel;


namespace Tools.View {
    
    
    /// <summary>
    /// StroopView
    /// </summary>
    public partial class StroopView : System.Windows.Controls.UserControl, System.Windows.Markup.IComponentConnector {
        
        
        #line 26 "..\..\..\..\View\StroopView.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.Image myPictureBox;
        
        #line default
        #line hidden
        
        
        #line 29 "..\..\..\..\View\StroopView.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.Button btn_Left;
        
        #line default
        #line hidden
        
        
        #line 32 "..\..\..\..\View\StroopView.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.Button btn_Save;
        
        #line default
        #line hidden
        
        
        #line 35 "..\..\..\..\View\StroopView.xaml"
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1823:AvoidUnusedPrivateFields")]
        internal System.Windows.Controls.Button btn_Right;
        
        #line default
        #line hidden
        
        private bool _contentLoaded;
        
        /// <summary>
        /// InitializeComponent
        /// </summary>
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        [System.CodeDom.Compiler.GeneratedCodeAttribute("PresentationBuildTasks", "8.0.3.0")]
        public void InitializeComponent() {
            if (_contentLoaded) {
                return;
            }
            _contentLoaded = true;
            System.Uri resourceLocater = new System.Uri("/Tools;component/view/stroopview.xaml", System.UriKind.Relative);
            
            #line 1 "..\..\..\..\View\StroopView.xaml"
            System.Windows.Application.LoadComponent(this, resourceLocater);
            
            #line default
            #line hidden
        }
        
        [System.Diagnostics.DebuggerNonUserCodeAttribute()]
        [System.CodeDom.Compiler.GeneratedCodeAttribute("PresentationBuildTasks", "8.0.3.0")]
        [System.ComponentModel.EditorBrowsableAttribute(System.ComponentModel.EditorBrowsableState.Never)]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Design", "CA1033:InterfaceMethodsShouldBeCallableByChildTypes")]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Maintainability", "CA1502:AvoidExcessiveComplexity")]
        [System.Diagnostics.CodeAnalysis.SuppressMessageAttribute("Microsoft.Performance", "CA1800:DoNotCastUnnecessarily")]
        void System.Windows.Markup.IComponentConnector.Connect(int connectionId, object target) {
            switch (connectionId)
            {
            case 1:
            this.myPictureBox = ((System.Windows.Controls.Image)(target));
            return;
            case 2:
            this.btn_Left = ((System.Windows.Controls.Button)(target));
            
            #line 29 "..\..\..\..\View\StroopView.xaml"
            this.btn_Left.Click += new System.Windows.RoutedEventHandler(this.btn_LeftClick);
            
            #line default
            #line hidden
            return;
            case 3:
            this.btn_Save = ((System.Windows.Controls.Button)(target));
            
            #line 32 "..\..\..\..\View\StroopView.xaml"
            this.btn_Save.Click += new System.Windows.RoutedEventHandler(this.btn_SaveClick);
            
            #line default
            #line hidden
            return;
            case 4:
            this.btn_Right = ((System.Windows.Controls.Button)(target));
            
            #line 35 "..\..\..\..\View\StroopView.xaml"
            this.btn_Right.Click += new System.Windows.RoutedEventHandler(this.btn_RightClick);
            
            #line default
            #line hidden
            return;
            }
            this._contentLoaded = true;
        }
    }
}
