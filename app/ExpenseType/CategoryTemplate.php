<form [formGroup]="categoryTypeForm" #eform="ngForm" (ngSubmit)="onSubmit(eform.value)" >
    <input type="text" formControlName="name">
    <button type="submit">Submit</button>
</form>
