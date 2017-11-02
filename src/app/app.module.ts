import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule,Routes } from '@angular/router'

import { AppComponent } from './app.component';
import { MycomponentComponent } from './mycomponent/mycomponent.component';
import { MenuComponent } from './menu/menu.component';
import { FooterComponent } from './footer/footer.component';
import { BasketComponent } from './basket/basket.component';
import { TennisComponent } from 'app/tennis/tennis.component';
import { PlayersService } from 'app/services/players.service';

const appRoutes:Routes = [
  {path:'', component: MycomponentComponent},
  {path:'basket', component:BasketComponent},
  {path:'tennis', component:TennisComponent}
]

@NgModule({
  declarations: [
    AppComponent,
    MycomponentComponent,
    MenuComponent,
    FooterComponent,
    BasketComponent,
    TennisComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    RouterModule.forRoot(appRoutes)
  ],
  providers: [PlayersService],
  bootstrap: [AppComponent]
})
export class AppModule { }
