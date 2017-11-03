import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { TableauComponent } from './tableau/tableau.component';
import { DemoComponent } from './demo/demo.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { Bouton1Component } from './bouton1/bouton1.component';
import { AboutComponent } from './about/about.component';
import { Child1Component } from './child1/child1.component';
import { Child2Component } from './child2/child2.component';

const appRoutes: Routes = [
    {
    path:'',
    component: DemoComponent
    },
    {
    path:'about',
    component: Bouton1Component
    }
];

@NgModule({
  declarations: [
    AppComponent,
    TableauComponent,
    DemoComponent,
    FooterComponent,
    HeaderComponent,
    SidebarComponent,
    Bouton1Component,
    AboutComponent,
    Child1Component,
    Child2Component
  ],
  imports: [
  RouterModule.forRoot(appRoutes),
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
