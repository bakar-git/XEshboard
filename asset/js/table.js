export class Table {

    static col_change_event_name = 'table_col_changed';
    /*
        Table's header_data consists of array of objects, each object has
        {
            name : string,  // sets name of header | must define, no default
            size : float, // sets size of column. Use only 1-5 values. Value tells how large column is as compared to other columns | optional, default : 1
            data : string, // sets data inside header | optional, default : this.name
            break_at : string // media Query on which column will become in expanded state | optional, no default
            editable : boolean // if true, column will be editable | optional, default : false
            func : function(column) // this function will be called on each column except for header | optional, no default
        }
    */
    /**
         * Creates a table inside element provided in `target` and uses `header_data` to make columns
         * @param {string} target selector of element where table will be add
         * @param {Array<Object>} header_data array of objects, each object has  {name, size, break_at, data}
    */
    constructor(target, header_data) {
        // creating table
        this.table = document.createElement('div');
        this.table.classList.add('c-table');
        // creating input field
        this.editor = document.createElement('input');
        this.editor.type = 'text';
        // table head
        let head = document.createElement('div');
        head.classList.add('thead');
        this.table.appendChild(head);
        // table body
        let body = document.createElement('div');
        body.classList.add('tbody');
        this.table.appendChild(body);
        //creating style elem
        this.style_sheet = document.createElement('style');
        // storing header info
        this.header_data = header_data;
        // making header row
        this.table.children[0].appendChild(this._make_row(null, true));
        // appending to target element
        let target_elem = document.querySelector(target);
        target_elem.appendChild(this.style_sheet);
        target_elem.appendChild(this.table);
    }

    /**
         * Makes a row using `data` and returns it
         * @param {Array<string>} data array of strings, each string contains data for corresponding element 
         * @param {Boolean} header true only when row is first row(header)
         * @returns row (DOM element) 
    */
    _make_row(data = null, header = false) {
        this.tmp = this.header_data.length + 1;
        // creating row
        let row = document.createElement('div');
        row.classList.add('tr');
        // creating first Column
        let first_col = document.createElement('div');
        first_col.classList.add('td');
        if (header) first_col.innerHTML = '<span>X</span>';
        else first_col.innerHTML = '<i class="fas fa-angle-right"></i>';
        if (!header) first_col.onclick = () => {
            row.classList.toggle('show');
        }
        row.appendChild(first_col);
        // creating other columns
        if (header) {
            for (let index = 0; index < this.header_data.length; index++) {
                if (this.header_data[index].data == undefined) this.header_data[index].data = this.header_data[index].name;
                if (this.header_data[index].size == undefined) this.header_data[index].size = 1;
                let col = this._make_col(this.header_data[index].name, this.header_data[index].size, this.header_data[index].data);
                if (this.header_data[index].break_at != undefined) this._col_mediaQuery(col, this.header_data[index].break_at);
                row.appendChild(col);
            }
        }
        else {
            for (let index = 0; index < data.length; index++) {
                let col = this._make_col(this.header_data[index].name, this.header_data[index].size, data[index], this.header_data[index].editable, this.header_data[index].func);
                row.appendChild(col);
            }
        }
        return row;
    }
    /**
         * Makes a column and returns it
         * @param {string} col_name this is stored on col-data and used when column is in expanded form
         * @param {int} col_size size of indvidual column
         * @param {string} col_data data to be stored inside column
         * @param {bool} editable determines if column is editable
         * @returns column
     */
    _make_col(col_name, col_size, col_data, editable = false, func) {
        // creating column
        let col = document.createElement('div');
        col.classList.add('td');
        col.style.flex = col_size;
        col.dataset.col = col_name;
        // creating column-in
        let col_in = document.createElement('div');
        col_in.classList.add('td-in');
        col_in.innerHTML = col_data;
        col.appendChild(col_in);
        if(editable) col.contentEditable = true;
        if(func != undefined) func(col);
        return col;
    }
    /**
         * Make mediaQuery css for table columns
         * @param {*} column 
         * @param {*} break_at 
     */
    _col_mediaQuery(column, break_at) {
        let position = this.header_data.findIndex((data) => data.name == column.dataset.col) + 2;
        if (column.break_order == undefined) { column.break_order = this.tmp--; }
        let Query =
            `@media (max-width: ${break_at}) { ` +
            `    .c-table .tr .td:nth-child(${position}){` +
            `        flex-basis: 100%!important;` +
            `        display: none;` +
            `        order: ${column.break_order};` +
            `    }` +
            `    .c-table .tr .td:nth-child(${position})::before{` +
            `        display: block;` +
            `    }` +
            `}`;
        this.style_sheet.innerText += Query;
    }

    add_row(data) {
        this.table.children[1].appendChild(this._make_row(data, false));
    }

}