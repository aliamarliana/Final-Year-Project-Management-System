<style>
:root {
  --white: #afafaf;
  --red: #e31b23;
  --bodyColor: #292a2b;
  --borderFormEls: hsl(0, 0%, 10%);
  --bgFormEls: hsl(0, 0%, 14%);
  --bgFormElsFocus: hsl(0, 7%, 20%);
}
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  outline: none;
}
a {
  color: inherit;
}
input,
select,
textarea,
button {
  font-family: inherit;
  font-size: 100%; 
}
button,
label {
  cursor: pointer;
}
select {
  appearance: none;
}
select::-ms-expand {
  display: none;
}
select:-moz-focusring {
  color: transparent !important;
  text-shadow: 0 0 0 var(--white);
}
textarea {
  resize: none;
}
ul {
  list-style: none;
}

.my-form select,
.my-form input,
.my-form textarea,
.my-form button {
  width: 100%;
  line-height: 1.5;
  padding: 15px 10px;
  border: 1px solid var(--borderFormEls);
  color: var(--white);
  background: var(--bgFormEls);
  transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
    transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}
.my-form textarea {
  height: 170px;
}
.my-form ::placeholder {
  color: inherit;
  opacity: 1;
}

@media screen and (min-width: 600px) {
  .my-form .grid {
    display: grid;
    grid-gap: 1.5rem;
  }
  
  .my-form .grid-2 {
    grid-template-columns: 1fr 1fr;   
  }
  .my-form .grid-3 {
    grid-template-columns: auto auto auto;
    align-items: center;
  }
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus,
.my-form button:focus {
  background: var(--bgFormElsFocus);
}
.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus {
  transform: scale(1.02);
}


.my-form *:required,
.my-form select {
  background-repeat: no-repeat;
  background-position: center right 12px;
  background-size: 15px 15px;
}
.my-form *:required {
  background-image: url(asterisk.svg);  
}
.my-form select {
  background-image: url(down.svg);
}

.my-form .btn-grid {
  position: relative;
  overflow: hidden;
  transition: filter 0.2s;
}
.my-form button:enabled:hover,
.my-form button:focus {
  background: var(--bgFormElsFocus);
}
.my-form button > * {
  display: inline-block;
  width: 100%;
  transition: transform 0.4s ease-in-out;
}
.my-form button .back {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-110%, -50%);
}
.my-form button:enabled:hover .back,
.my-form button:focus .back {
  transform: translate(-50%, -50%);
}
.my-form button:enabled:hover .front,
.my-form button:focus .front {
  transform: translateX(110%);
}


</style>