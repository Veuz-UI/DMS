let Propertiels = [];

const droppable = document.querySelector('.formdroppable');

new Sortable(droppable, {
  multiDrag: true, // Enable multi-drag
  selectedClass: 'selected', // The class applied to the selected items
  fallbackTolerance: 3, // So that we can select items on mobile
  animation: 200,
});

const parser = new DOMParser(); // parsing htmlstring into html dom

const formElements = {
  name: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'text')"
    type="input"
  >
    <label for="">First name</label>  
    <input type="text" placeholder="Enter your first name" />
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6"
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  email: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'email')"
    type="input"
  >
    <label for="">Email</label>
    <input type="email" placeholder="Enter your email" />
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  phone: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'mobile')"
    type="input"
  >
    <label for="">Mobile</label>
    <input type="tel" placeholder="Enter your mobile number" />
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  website: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'website')"
    type="input"
  >
    <label for="">Website</label>
    <input type="url" placeholder="Enter your website" />
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  image: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'image')"
    type="input"
  >
    <label for="">Image</label>
    <input type="file"/>
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  textarea: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'textarea')"
    type="textarea"
  >
    <label for="">Textarea</label>
    <textarea placeholder="textarea"></textarea>
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  number: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'number')"
    type="input"
  >

  <label for="">Number</label>
  <input type="number" placeholder="number" />
    
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  date: `<div
    class="form-control widthfull"
    draggable="true"
    onclick="editProperties(event,'date')"
    type="input"
  >
  <label for="">Date</label>
  <input type="date"/>
    
    <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
    xmlns="http://www.w3.org/2000/svg"
    fill="none"
    viewBox="0 0 24 24"
    stroke-width="1.5"
    stroke="currentColor"
    class="w-6 h-6 "
    
  >
    <path
      stroke-linecap="round"
      stroke-linejoin="round"
      d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
    />
  </svg></button>
  </div>`,
  text: `<div
  class="form-control widthfull"
  draggable="true"
  onclick="editProperties(event,'text')"
  type="input"
>
<label for="">Text</label>
<input type="text" placeholder="text" />
  
  <button type="button" class="delete-element" onclick="deleteElement(event)"><svg
  xmlns="http://www.w3.org/2000/svg"
  fill="none"
  viewBox="0 0 24 24"
  stroke-width="1.5"
  stroke="currentColor"
  class="w-6 h-6 "
  
>
  <path
    stroke-linecap="round"
    stroke-linejoin="round"
    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
  />
</svg></button>
</div>`,
};

const defaultFields = [
  {
    id: 1,
    index: null,
    label: 'First name',
    field_name: 'firstname',
    placeholder: 'Enter your first name',
    column: false,
    required: true,
  },
  {
    id: 2,
    index: null,
    label: 'Last name',
    field_name: 'lastname',
    placeholder: 'Enter your last name',
    column: false,
    required: true,
  },
  {
    id: 3,
    index: null,
    label: 'Email',
    field_name: 'email',
    placeholder: 'Enter your email address',
    column: true,
    required: true,
  },
  {
    id: 4,
    index: null,
    label: 'Company name',
    field_name: 'company_name',
    placeholder: 'Enter your company name',
    column: true,
    required: true,
  },
  {
    id: 5,
    index: null,
    label: 'Designation',
    field_name: 'designation',
    placeholder: 'Enter your designation',
    column: false,
    required: true,
  },
  {
    id: 6,
    index: null,
    label: 'Mobile',
    field_name: 'mobile',
    placeholder: 'Enter your mobile number',
    column: false,
    required: true,
  },
];

defaultFields.forEach((elem) => {
  const htmlElement = `<div
  class="form-control ${elem.column && 'widthfull'}"
  draggable="true"
  type="input"
  ${elem.column && 'width=true'}
  
>
  <label for="">${elem.label}</label><small class="required">*</small>
  <input type="text" placeholder="${elem.placeholder}" name=${elem.field_name} required=" ${
    elem.required ? true : false
  }"
  } />
  
</div>`;

  droppable.appendChild(parser.parseFromString(htmlElement, 'text/html').body.children[0]);
});

const getCurrentElement = (type) => {
  return formElements[type];
};

let currentElement = null;
let nearElement = null;
let dragType = false;

const dragElement = (event, type) => {
  currentElement = getCurrentElement(type);
  dragType = true;
};

if (droppable) {
  droppable.addEventListener('dragover', (e) => {
    e.preventDefault();
    if (currentElement) {
      elements = droppable.querySelectorAll('.form-control');
      elements.forEach((elem) => {
        elem.addEventListener('dragover', (e) => {
          nearElement = elem;
        });
      });

      // if (dragType) {

      //   if (!nearElement) {
      //     droppable.appendChild(snapshot);
      //   } else {
      //     droppable.insertBefore(snapshot, nearElement);
      //   }
      // }
    }
  });

  // not working
  droppable.addEventListener('ondragleave', (e) => {
    e.preventDefault();
  });

  // on drop event
  droppable.addEventListener('drop', (e) => {
    if (dragType) {
      element = parser.parseFromString(currentElement, 'text/html');
      droppable.insertBefore(element.body.children[0], nearElement);
    }
    currentElement = null;
    dragType = false;
  });
}

// To delete a element
const deleteElement = (event) => {
  const elementToDelete = event.target.parentElement;
  elementToDelete.remove();
  document.getElementById(
    'properties-pannel'
  ).innerHTML = `<span class="help-text">Select a Field to edit</span>`;
};

////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////
const properties = {};

const propertiesPannel = document.getElementById('properties-pannel');

let selectedElement;

const editProperties = (event, type) => {
  selectedElement = event.target;
  const key = type.toLowerCase();
  if (selectedElement.getAttribute('type') !== 'button') {
    let inputVal;
    if (type === 'textarea') {
      inputVal = selectedElement.querySelector('textarea');
    } else if (type === 'dropdown') {
      inputVal = selectedElement.querySelector('select');
    } else {
      inputVal = selectedElement.querySelector('input');
    }

    if (!selectedElement.getAttribute('draggable')) {
      return;
    }

    const values = {
      label: selectedElement.querySelector('label').innerText,
      name: inputVal.getAttribute('name'),
      placeholder: inputVal.getAttribute('placeholder'),
      multiple: inputVal.getAttribute('multiple') ? true : false,
      required: inputVal.getAttribute('required') ? true : false,
      column: selectedElement.classList.contains('widthfull') ? true : false,
    };

    switch (key) {
      case 'text':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      <div class="form-control">
        <label for="">Placeholder</label>
        <input type="text" value="${
          values.placeholder ? values.placeholder : ''
        }" name="placeholder" />
      </div>
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'text')">update</button>
      </div>
      </form>
    </div>`;
        break;
      case 'email':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      <div class="form-control">
        <label for="">Placeholder</label>
        <input type="text" value="${
          values.placeholder ? values.placeholder : ''
        }" name="placeholder" />
      </div>
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'email')">update</button>
      </div>

      </form>
    </div>`;
        break;
      case 'mobile':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      
      <div class="form-control">
        <label for="">Placeholder</label>
        <input type="text" value="${
          values.placeholder ? values.placeholder : ''
        }" name="placeholder" />
      </div>
     
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'mobile')">update</button>
      </div>
      </form>
    </div>`;
        break;
      case 'website':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      
      <div class="form-control">
        <label for="">Placeholder</label>
        <input type="text" value="${
          values.placeholder ? values.placeholder : ''
        }" name="placeholder" />
      </div>
     
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'website')">update</button>
      </div>

      </form>
    </div>`;
        break;
      case 'image':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
    
      <div class="form-control">
        <label for="">Multiple</label>
        <input type="checkbox" ${values.multiple && 'checked'} name="multiple"/>
      </div>
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'image')">update</button>
      </div>

      </form>
    </div>`;
        break;
      case 'textarea':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
    
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      <div class="form-control">
      <label for="">Placeholder</label>
      <input type="text" value="${
        values.placeholder ? values.placeholder : ''
      }" name="placeholder" />
    </div>
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'textarea')">update</button>
      </div>

      </form>
    </div>`;
        break;
      case 'number':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      
      <div class="form-control">
        <label for="">Placeholder</label>
        <input type="text" value="${
          values.placeholder ? values.placeholder : ''
        }" name="placeholder" />
      </div>
      
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'mobile')">update</button>
      </div>
      </form>
    </div>`;
        break;
      case 'date':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'mobile')">update</button>
      </div>
      </form>
    </div>`;
        break;
      case 'text':
        propertiesPannel.innerHTML = `<div class="properties">
      <form id="FORMPROPERTY">
      <div class="form-control">
        <label for="">Label</label>
        <input type="text" value="${values.label}" name="label"/>
      </div>
      <div class="form-control">
      <label for="">Field name</label>
      <input type="text" value="${values.name ? values.name : ''}" name="field_name" />
    </div>
      <div class="form-control">
        <label for="">Placeholder</label>
        <input type="text" value="${
          values.placeholder ? values.placeholder : ''
        }" name="placeholder" />
      </div>
    
      <div class="form-control">
        <label for="">Required</label>
        <input type="checkbox" ${values.required && 'checked'} name="required"/>
      </div>
      <div class="form-control">
        <label for="">Column</label>
        <input type="checkbox" ${values.column && 'checked'} name="column"/>
      </div>
      <div class="form-control">
        <button type="button" class="saveProperty" onclick="updateProperty(event,'text')">update</button>
      </div>
      </form>
    </div>`;
        break;

      default:
        break;
    }
  }
};

const updateProperty = (event, type) => {
  const elementData = document.getElementById('FORMPROPERTY');
  const formData = new FormData(elementData);
  const fieldName = formData.get('field_name');

  const key = type.toLowerCase();

  if (!formData.get('label')) {
    alert('Label is Required');
    return;
  }

  if (!fieldName || !fieldName.length) {
    alert('Field name is  Required');
    return;
  }

  switch (key) {
    case 'text':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement
        .querySelector('input')
        .setAttribute('placeholder', formData.get('placeholder'));
      selectedElement.querySelector('input').setAttribute('name', formData.get('field_name'));

      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }
      if (formData.get('required') === 'on') {
        selectedElement.querySelector('input').setAttribute('required', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('required');
      }

      break;
    case 'email':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement
        .querySelector('input')
        .setAttribute('placeholder', formData.get('placeholder'));
      selectedElement.querySelector('input').setAttribute('name', formData.get('field_name'));

      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }
      if (formData.get('required') === 'on') {
        selectedElement.querySelector('input').setAttribute('required', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('required');
      }

      break;
    case 'mobile':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement
        .querySelector('input')
        .setAttribute('placeholder', formData.get('placeholder'));
      selectedElement.querySelector('input').setAttribute('name', formData.get('field_name'));

      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }
      if (formData.get('required') === 'on') {
        selectedElement.querySelector('input').setAttribute('required', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('required');
      }

      break;
    case 'website':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement
        .querySelector('input')
        .setAttribute('placeholder', formData.get('placeholder'));
      selectedElement.querySelector('input').setAttribute('name', formData.get('field_name'));

      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }
      if (formData.get('required') === 'on') {
        selectedElement.querySelector('input').setAttribute('required', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('required');
      }

      break;
    case 'image':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement.querySelector('input').setAttribute('name', formData.get('field_name'));
      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }

      if (formData.get('required') === 'on') {
        selectedElement.querySelector('input').setAttribute('required', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('required');
      }
      if (formData.get('multiple') === 'on') {
        selectedElement.querySelector('input').setAttribute('multiple', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('multiple');
      }

      break;
    case 'textarea':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement
        .querySelector('textarea')
        .setAttribute('placeholder', formData.get('placeholder'));
      selectedElement.querySelector('textarea').setAttribute('name', formData.get('field_name'));
      selectedElement
        .querySelector('textarea')
        .setAttribute('maxlength', formData.get('maxlength'));
      selectedElement
        .querySelector('textarea')
        .setAttribute('minlength', formData.get('minlength'));
      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }

      if (formData.get('required') === 'on') {
        selectedElement.querySelector('textarea').setAttribute('required', true);
      } else {
        selectedElement.querySelector('textarea').removeAttribute('required');
      }
      if (formData.get('multiple') === 'on') {
        selectedElement.querySelector('textarea').setAttribute('multiple', true);
      } else {
        selectedElement.querySelector('textarea').removeAttribute('multiple');
      }

      break;
    case 'number':
      selectedElement.querySelector('label').innerText = formData.get('label');
      selectedElement
        .querySelector('input')
        .setAttribute('placeholder', formData.get('placeholder'));
      selectedElement.querySelector('input').setAttribute('name', formData.get('field_name'));

      if (formData.get('column') === 'on') {
        selectedElement.classList.add('widthfull');
        selectedElement.setAttribute('width', true);
      } else {
        selectedElement.classList.remove('widthfull');
        selectedElement.removeAttribute('width');
      }
      if (formData.get('required') === 'on') {
        selectedElement.querySelector('input').setAttribute('required', true);
      } else {
        selectedElement.querySelector('input').removeAttribute('required');
      }

      break;

    default:
      break;
  }
};

const saveForm = () => {
  const elements = droppable.querySelectorAll('.form-control');
  const formData = [];

  elements.forEach((elem, i) => {
    const inputType = elem.getAttribute('type');
    if (!inputType) return;
    let sections;

    switch (inputType) {
      case 'input':
        sections = {
          index: i + 1,
          label: elem.querySelector('label').innerText
            ? elem.querySelector('label').innerText
            : null,
          field_name: elem.querySelector('input').getAttribute('name'),
          placeholder: elem.querySelector('input').getAttribute('placeholder'),
          multiple: elem.querySelector('input').getAttribute('multiple') ? true : false,
          required: elem.querySelector('input').getAttribute('required') ? true : false,
          column: elem.getAttribute('width') ? true : false,
        };

        break;
      case 'textarea':
        sections = {
          index: i + 1,
          label: elem.querySelector('label').innerText
            ? elem.querySelector('label').innerText
            : null,
          field_name: elem.querySelector('textarea').getAttribute('name'),
          placeholder: elem.querySelector('textarea').getAttribute('placeholder'),
          multiple: elem.querySelector('textarea').getAttribute('multiple') ? true : false,

          required: elem.querySelector('textarea').getAttribute('required') ? true : false,
          column: elem.getAttribute('width') ? true : false,
        };

        break;

      default:
        break;
    }
    formData.push(sections);
  });
  const isFieldEmpty = formData.filter((data) => data.field_name === null);

  if (isFieldEmpty.length) {
    alert('Missing field name');
    return;
  }
  const fieldNames = formData.map((name) => {
    return name.field_name;
  });

  const checkIfDuplicateExists = (arr) => {
    return new Set(arr).size !== arr.length;
  };

  const isDupliate = checkIfDuplicateExists(fieldNames);
  if (isDupliate) {
    alert('duplicate field name');
    return;
  }
  console.log(formData);
};
