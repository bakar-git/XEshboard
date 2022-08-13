function Constructor(target, header_data) {
    // creating table
    this.table = document.createElement('div'); 
    this.table.classList.add('c-table');
    //creating style elem
    this.style_sheet = document.createElement('style');
    // storing info
    this.header_data = header_data;
    // making header row
    this.table.appendChild(this.make_row(null, true));
    // appending to target element
    let target_elem = document.querySelector(target);
    target_elem.appendChild(this.style_sheet);
    target_elem.appendChild(this.table);
}

Constructor.prototype.make_row = function (data = null, header=false) {
    this.tmp = this.header_data.length+1;
    // creating row
    let row = document.createElement('div');
    row.classList.add('tr');
    // creating first Column
    let first_col = document.createElement('div');
    first_col.classList.add('td');
    if (header) first_col.innerHTML = '<span>X</span>';
    else first_col.innerHTML = '<i class="fas fa-angle-right"></i>';
    if (!header) first_col.onclick = ()=>{
        row.classList.toggle('show');
    }
    row.appendChild(first_col);
    // creating other columns
    if(header){
        for (let index = 0; index < this.header_data.length; index++) {
            let col = this.make_col(this.header_data[index].name, this.header_data[index].size, this.header_data[index].name);
            this.col_mediaQuery(col, this.header_data[index].break_at)
            row.appendChild(col);
        }  
    }
    else{
        for (let index = 0; index < data.length; index++) {
            let col = this.make_col(this.header_data[index].name, this.header_data[index].size, data[index]);
            row.appendChild(col);
        }
    }
    return row;
}
Constructor.prototype.make_col = function (col_name, size, data) {
    // creating column
    let col = document.createElement('div');
    col.classList.add('td');
    col.style.flex = size;
    col.dataset.col = col_name;
    // creating column-in
    let col_in = document.createElement('div');
    col_in.classList.add('td-in');
    col_in.innerHTML = data;
    col.appendChild(col_in);
    return col;
}
Constructor.prototype.col_mediaQuery = function (column, size) {

    let position = this.header_data.findIndex((data)=>data.name == column.dataset.col)+2;
    if (column.break_order == undefined) { column.break_order = this.tmp--; }
    let Query = 
    `@media (max-width: ${size}) { `+
    `    .c-table > .tr > .td:nth-child(${position}){`+
    `        flex-basis: 100%!important;`+
    `        display: none;`+
    `        order: ${column.break_order};`+
    `    }`+
    `    .c-table > .tr > .td:nth-child(${position})::before{`+
    `        display: block;`+
    `    }`+
    `}`;
    this.style_sheet.innerText += Query;
}
Constructor.prototype.add_row = function (data) {
    this.table.appendChild(this.make_row(data, false));
}
export default Constructor;