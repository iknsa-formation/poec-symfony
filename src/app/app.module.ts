import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { HeaderComponent } from './header/header.component';
import { SectionComponent } from './section/section.component';
import { BodyComponent } from './body/body.component';
import { FooterComponent } from './footer/footer.component';
import { HomeComponent } from './home/home.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';

import { RouterModule, Routes } from '@angular/router';

/*
* Importation des Users
*/

import { UserComponent } from './user/user.component';
import { UsersService } from './service/users.service';


const appRoutes: Routes = [
{
  path: '',
  redirectTo: 'home', pathMatch: 'full'
},
{
  path: 'home',
  component: HomeComponent
},
{
  path: 'about',
  component: AboutComponent,
    children: [
      {path: 'child-one', component: ContactComponent},
      {path: 'child-two', component: UserComponent}
    ]
},
{
  path: 'contact',
  component: ContactComponent
}
];

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    SectionComponent,
    BodyComponent,
    FooterComponent,
    HomeComponent,
    AboutComponent,
    ContactComponent,
    UserComponent,
  ],
  imports: [

    RouterModule.forRoot(appRoutes),
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [UsersService],
  bootstrap: [AppComponent]
})
export class AppModule { }
