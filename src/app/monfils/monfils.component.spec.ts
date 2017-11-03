import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { MonfilsComponent } from './monfils.component';

describe('MonfilsComponent', () => {
  let component: MonfilsComponent;
  let fixture: ComponentFixture<MonfilsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ MonfilsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(MonfilsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
