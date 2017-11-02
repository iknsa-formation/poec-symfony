import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { DemoComponent } from './demo/demo.component';
import { FruitComponent } from './fruit/fruit.component';
import { EtudiantComponent } from './etudiant/etudiant.component';
import { FooterComponent } from './footer/footer.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { NavbarComponent } from './navbar/navbar.component';
import { HomeComponent } from './home/home.component';
import { ResourceComponent } from './resource/resource.component';
import { AboutmeComponent } from './aboutme/aboutme.component';

const appRoutes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'etudiants', component: EtudiantComponent },
  { path: 'fruits', component: FruitComponent },
  { path: 'resources', component: ResourceComponent },
  { path: 'aboutme', component: AboutmeComponent },
];

@NgModule({
  declarations: [
    AppComponent,
    DemoComponent,
    FruitComponent,
    EtudiantComponent,
    FooterComponent,
    SidebarComponent,
    NavbarComponent,
    HomeComponent,
    ResourceComponent,
    AboutmeComponent,

  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: true } // <-- debugging purposes only
    )
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
