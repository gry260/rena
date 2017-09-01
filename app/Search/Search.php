



<br /><br /><br />

<h2>Search</h2>


<!--
<ul *ngFor="let item of p; let i = index">
    dd
   <ol *ngFor="let jitem of item; let j = index">>
            {{jitem}}
   </ol>
</ul>

-->



<ul *ngFor="let item of p; let i = index">
    <input type="checkbox" />
        {{ item.name }}

    <div *ngIf="p3[i]">
        <li *ngFor="let s of p3[i]; let j = index" style="margin-left: 50px;">
            <input type="checkbox" />
            {{s.name}}
        </li>
    </div>
</ul>

<label>Name</label>
<br />
 <input type="text" />

<br /><br />
<label>Price</label>
<br />
<select>
    <option>
        =
    </option>
    <option>
        <
    </option>
    <option>
        >
    </option>
</select>
<input type="text" />


AND
<select>
    <option>
        =
    </option>
    <option>
        <
    </option>
    <option>
        >
    </option>
</select>
<input type="text" />

<br /><br />
<label>Time</label>
<br />
<select>
    <option>This Month</option>
    <option>Last Month</option>
    <option>Last 3 Months</option>
    <option>This Year</option>
</select>


&nbsp; &nbsp;&nbsp;&nbsp;
<label>Year</label>
<select>
    <option>2017</option>
    <option>2016</option>
</select>

<label>Months</label>
<select>
<option>
    Janruary
</option>
</select>


&nbsp; &nbsp;&nbsp;&nbsp;
<label>From</label>
<input type="text"/>

<label>To</label>
<input type="text"/>

<br />
By

<input type="checkbox" />
Category


<input type="checkbox" />
SubCategory

<input type="checkbox"/>
Item Name

<input type="checkbox" />
Days






