import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule,Routes } from '@angular/router';
import { UsersService } from './service/users.service';

import { AppComponent } from './app.component';
import { MademoComponent } from './mademo/mademo.component';
import { LesnomComponent } from './lesnom/lesnom.component';
import { EtudiantComponent } from './etudiant/etudiant.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { MenuComponent } from './menu/menu.component';
import { FooterComponent } from './footer/footer.component';
import { VoteComponent } from './vote/vote.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';

const appRoutes: Routes = [{
    path:"",
    component:MademoComponent
},{
    path:"vote",
    component:VoteComponent
},{
    path:"about",
    component:AboutComponent,
    children:[
        {path:"child-one",component:EtudiantComponent},
        {path:"child-two",component:LesnomComponent}
    ]
}];
@NgModule({
  declarations: [
    AppComponent,
    MademoComponent,
    LesnomComponent,
    EtudiantComponent,
    SidebarComponent,
    MenuComponent,
    FooterComponent,
    VoteComponent,
    AboutComponent,
    ContactComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
      RouterModule.forRoot(appRoutes)
  ],
  providers: [UsersService],
  bootstrap: [AppComponent]
})
export class AppModule { }
