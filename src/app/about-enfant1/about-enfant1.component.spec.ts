import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { AboutEnfant1Component } from './about-enfant1.component';

describe('AboutEnfant1Component', () => {
  let component: AboutEnfant1Component;
  let fixture: ComponentFixture<AboutEnfant1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AboutEnfant1Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AboutEnfant1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
