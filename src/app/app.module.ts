import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';

import { AppComponent } from './app.component';
import { MonComposantComponent } from './mon-composant/mon-composant.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { FooterComponent } from './footer/footer.component';
import { HeaderComponent } from './header/header.component';
import { ContactComponent } from './contact/contact.component';
import { MessagesComponent } from './messages/messages.component';
import { BelleComponent } from './belle/belle.component';
import { MonfilsComponent } from './monfils/monfils.component';

import { RouterModule, Routes } from '@angular/router';






  const appRoutes: Routes = [
  {
  path: '',
  component: MonComposantComponent
  },
  
  {
  path: 'contact',
  component: ContactComponent
  },
  {
  path: 'messages',
  component: MessagesComponent,
  children:[
  {path: 'monfils', component: MonfilsComponent}
  ]
  },
  
  {
  path: 'belle',
  component: BelleComponent
  }
  ]
  


@NgModule({
  declarations: [
    AppComponent,
    MonComposantComponent,
    ContactComponent,
    SidebarComponent,
    FooterComponent,
    HeaderComponent,
    MessagesComponent,
    BelleComponent,
    MonfilsComponent,
  ],
  imports: [
   RouterModule.forRoot (appRoutes),
   BrowserModule,
    FormsModule,
    HttpModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

