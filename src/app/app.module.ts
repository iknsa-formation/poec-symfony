import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { TemplateNewComponent } from './template-new/template-new.component';
import { SiderBarComponent } from './sider-bar/sider-bar.component';
import { ListeMenuComponent } from './liste-menu/liste-menu.component';
import { FooterPageComponent } from './footer-page/footer-page.component';
import { MenuHautComponent } from './menu-haut/menu-haut.component';
import { AcueilComponentComponent } from './acueil-component/acueil-component.component';
import { AboutComponentComponent } from './about-component/about-component.component';
import { ContactComponentComponent } from './contact-component/contact-component.component';
import { AcueilSubmenuComponent } from './acueil-submenu/acueil-submenu.component';
import { AboutEnfant1Component } from './about-enfant1/about-enfant1.component';
import { AboutEnfant2Component } from './about-enfant2/about-enfant2.component';
import { UserComponent } from './user/user.component';
import { UserService } from './service/users.service';


const appRoutes: Routes = [
{
    path:'',
    redirectTo:'acueil', pathMatch: 'full'
},

{
    path:'acueil',
    component: AcueilComponentComponent
 },
{
    path:'about',
    component: AboutComponentComponent,
    children: [
        {
            path: 'about-enfant1', 
            component: AboutEnfant1Component
        },
        {
            path: 'about-enfant2',
            component: AboutEnfant2Component
        }
    ]
},
{
    path:'contact',
    component: ContactComponentComponent
}
];

@NgModule({
  declarations: [
    AppComponent,
    TemplateNewComponent,
    SiderBarComponent,
    ListeMenuComponent,
    FooterPageComponent,
    MenuHautComponent,
    AcueilComponentComponent,
    AboutComponentComponent,
    ContactComponentComponent,
    AcueilSubmenuComponent,
    AboutEnfant1Component,
    AboutEnfant2Component,
    UserComponent
  ],
  imports: [
    RouterModule.forRoot(appRoutes),
    BrowserModule,
    FormsModule,
    HttpModule
  ],
  providers: [UserService],
  bootstrap: [AppComponent]
})
export class AppModule { }



