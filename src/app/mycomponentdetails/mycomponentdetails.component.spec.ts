import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MycomponentdetailsComponent } from './mycomponentdetails.component';

describe('MycomponentdetailsComponent', () => {
  let component: MycomponentdetailsComponent;
  let fixture: ComponentFixture<MycomponentdetailsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MycomponentdetailsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MycomponentdetailsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
