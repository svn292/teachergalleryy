(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[9],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=script&lang=js&":
/*!****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newproduct.vue?vue&type=script&lang=js& ***!
  \****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var vue2_editor__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue2-editor */ "./node_modules/vue2-editor/dist/vue2-editor.esm.js");
/* harmony import */ var _Adminlayout_App__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @/Adminlayout/App */ "./resources/js/Adminlayout/App.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


var slugify = __webpack_require__(/*! slugify */ "./node_modules/slugify/slugify.js");


/* harmony default export */ __webpack_exports__["default"] = ({
  layout: _Adminlayout_App__WEBPACK_IMPORTED_MODULE_1__["default"],
  components: {
    App: _Adminlayout_App__WEBPACK_IMPORTED_MODULE_1__["default"],
    VueEditor: vue2_editor__WEBPACK_IMPORTED_MODULE_0__["VueEditor"]
  },
  props: {
    errors: Object,
    data: null,
    make: null,
    category: null,
    appurl: null,
    flash: null
  },
  watch: {
    // whenever question changes, this function will run
    errors: function errors(value) {
      $.each(value, function (key, val) {
        // swal("error!", val[0], "error");br
        toastr.error("Error", val[0]);
      });
    }
  },
  computed: {
    // a computed getter
    slug: function slug() {
      // `this` points to the vm instance
      return slugify(this.form.name);
    }
  },
  mounted: function mounted() {
    if (this.data) {
      this.form = this.data;
      this.setmodel();
      this.setsubcat();
      this.specification = this.form.product_specification;
      delete this.form.product_specification;
    }
  },
  data: function data() {
    return {
      error: null,
      models: null,
      subcategory: null,
      form: {
        name: "",
        frontpart: "",
        backpart: "",
        description: "",
        usd: "",
        cad: "",
        make_id: "",
        models_id: "",
        category_id: "",
        subcategory_id: "",
        status: 1,
        image: ""
      },
      specification: [{
        specificationName: '',
        specificationValue: ''
      }],
      pageImage: null
    };
  },
  methods: {
    additems: function additems() {
      var item = {
        specificationName: '',
        specificationValue: ''
      };
      this.specification.push(item);
    },
    delitems: function delitems(index) {
      this.specification.splice(index, 1);
    },
    setmodel: function setmodel() {
      var vm = this;
      $.each(this.make, function (key, val) {
        if (vm.form.make_id == val.id) vm.models = vm.make[key].models;
      });
    },
    setsubcat: function setsubcat() {
      var vm = this;
      $.each(this.category, function (key, val) {
        if (vm.form.category_id == val.id) vm.subcategory = vm.category[key].children;
      });
    },
    onFileChange: function onFileChange() {
      this.pageImage = this.$refs.file.files[0];
      console.log(this.logo);
    },
    submit: function submit() {
      var frm = new FormData();
      var myObj = this.form;
      $.each(myObj, function (key, val) {
        frm.append(key, val);
      });

      if (this.pageImage) {
        frm.append("pageImage", this.pageImage);
      }

      frm.append('specification', JSON.stringify(this.specification));
      this.$inertia.post(this.$page.url, frm); // let vm = this;
      // axios.post('/login', this.form)
      //     .then(function (response) {
      //         //swal("Success!", 'Successfully Logged in', "success");
      //         setTimeout(function() {
      //                 window.location.href = response.data;
      //             }, 1000);
      //     })
      //     .catch(function (error) {
      //         if(error.response.data.errors);
      //         vm.error = error.response.data.errors;
      //     });
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css&":
/*!***********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--5-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--5-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css& ***!
  \***********************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.wrapper-content[data-v-d4e65390] {\n  box-shadow: 0px 7px 23px -10px #000 !important;\n}\nlabel[data-v-d4e65390] {\n  font-weight: 600 !important;\n}\n.note-editor.note-frame .note-editing-area .note-editable[data-v-d4e65390] {\n  height: 280px !important;\n}\n.note-editor.note-frame[data-v-d4e65390] {\n  border: 1px solid #ccc;\n}\n.publish[data-v-d4e65390] {\n  padding: 10px;\n  border: 1px solid #f5f5da;\n  background: #f5f5fa;\n}\n#image_preview img[data-v-d4e65390] {\n  width: 100%;\n  height: 170px;\n  border: 3px solid #ccc;\n}\n#image_preview1 img[data-v-d4e65390] {\n  width: 100%;\n  height: 170px;\n  border: 3px solid #ccc;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/slugify/slugify.js":
/*!*****************************************!*\
  !*** ./node_modules/slugify/slugify.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


;(function (name, root, factory) {
  if (true) {
    module.exports = factory()
    module.exports['default'] = factory()
  }
  /* istanbul ignore next */
  else {}
}('slugify', this, function () {
  var charMap = JSON.parse('{"$":"dollar","%":"percent","&":"and","<":"less",">":"greater","|":"or","??":"cent","??":"pound","??":"currency","??":"yen","??":"(c)","??":"a","??":"(r)","??":"o","??":"A","??":"A","??":"A","??":"A","??":"A","??":"A","??":"AE","??":"C","??":"E","??":"E","??":"E","??":"E","??":"I","??":"I","??":"I","??":"I","??":"D","??":"N","??":"O","??":"O","??":"O","??":"O","??":"O","??":"O","??":"U","??":"U","??":"U","??":"U","??":"Y","??":"TH","??":"ss","??":"a","??":"a","??":"a","??":"a","??":"a","??":"a","??":"ae","??":"c","??":"e","??":"e","??":"e","??":"e","??":"i","??":"i","??":"i","??":"i","??":"d","??":"n","??":"o","??":"o","??":"o","??":"o","??":"o","??":"o","??":"u","??":"u","??":"u","??":"u","??":"y","??":"th","??":"y","??":"A","??":"a","??":"A","??":"a","??":"A","??":"a","??":"C","??":"c","??":"C","??":"c","??":"D","??":"d","??":"DJ","??":"dj","??":"E","??":"e","??":"E","??":"e","??":"e","??":"e","??":"E","??":"e","??":"G","??":"g","??":"G","??":"g","??":"I","??":"i","??":"i","??":"i","??":"I","??":"i","??":"I","??":"i","??":"k","??":"k","??":"L","??":"l","??":"L","??":"l","??":"L","??":"l","??":"N","??":"n","??":"N","??":"n","??":"N","??":"n","??":"O","??":"o","??":"O","??":"o","??":"OE","??":"oe","??":"R","??":"r","??":"R","??":"r","??":"S","??":"s","??":"S","??":"s","??":"S","??":"s","??":"T","??":"t","??":"T","??":"t","??":"U","??":"u","??":"u","??":"u","??":"U","??":"u","??":"U","??":"u","??":"U","??":"u","??":"W","??":"w","??":"Y","??":"y","??":"Y","??":"Z","??":"z","??":"Z","??":"z","??":"Z","??":"z","??":"E","??":"f","??":"O","??":"o","??":"U","??":"u","??":"LJ","??":"lj","??":"NJ","??":"nj","??":"S","??":"s","??":"T","??":"t","??":"e","??":"o","??":"A","??":"E","??":"H","??":"I","??":"O","??":"Y","??":"W","??":"i","??":"A","??":"B","??":"G","??":"D","??":"E","??":"Z","??":"H","??":"8","??":"I","??":"K","??":"L","??":"M","??":"N","??":"3","??":"O","??":"P","??":"R","??":"S","??":"T","??":"Y","??":"F","??":"X","??":"PS","??":"W","??":"I","??":"Y","??":"a","??":"e","??":"h","??":"i","??":"y","??":"a","??":"b","??":"g","??":"d","??":"e","??":"z","??":"h","??":"8","??":"i","??":"k","??":"l","??":"m","??":"n","??":"3","??":"o","??":"p","??":"r","??":"s","??":"s","??":"t","??":"y","??":"f","??":"x","??":"ps","??":"w","??":"i","??":"y","??":"o","??":"y","??":"w","??":"Yo","??":"DJ","??":"Ye","??":"I","??":"Yi","??":"J","??":"LJ","??":"NJ","??":"C","??":"DZ","??":"A","??":"B","??":"V","??":"G","??":"D","??":"E","??":"Zh","??":"Z","??":"I","??":"J","??":"K","??":"L","??":"M","??":"N","??":"O","??":"P","??":"R","??":"S","??":"T","??":"U","??":"F","??":"H","??":"C","??":"Ch","??":"Sh","??":"Sh","??":"U","??":"Y","??":"","??":"E","??":"Yu","??":"Ya","??":"a","??":"b","??":"v","??":"g","??":"d","??":"e","??":"zh","??":"z","??":"i","??":"j","??":"k","??":"l","??":"m","??":"n","??":"o","??":"p","??":"r","??":"s","??":"t","??":"u","??":"f","??":"h","??":"c","??":"ch","??":"sh","??":"sh","??":"u","??":"y","??":"","??":"e","??":"yu","??":"ya","??":"yo","??":"dj","??":"ye","??":"i","??":"yi","??":"j","??":"lj","??":"nj","??":"c","??":"u","??":"dz","??":"G","??":"g","??":"GH","??":"gh","??":"KH","??":"kh","??":"NG","??":"ng","??":"UE","??":"ue","??":"U","??":"u","??":"H","??":"h","??":"AE","??":"ae","??":"OE","??":"oe","???":"baht","???":"a","???":"b","???":"g","???":"d","???":"e","???":"v","???":"z","???":"t","???":"i","???":"k","???":"l","???":"m","???":"n","???":"o","???":"p","???":"zh","???":"r","???":"s","???":"t","???":"u","???":"f","???":"k","???":"gh","???":"q","???":"sh","???":"ch","???":"ts","???":"dz","???":"ts","???":"ch","???":"kh","???":"j","???":"h","???":"W","???":"w","???":"W","???":"w","???":"W","???":"w","???":"SS","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"A","???":"a","???":"E","???":"e","???":"E","???":"e","???":"E","???":"e","???":"E","???":"e","???":"E","???":"e","???":"E","???":"e","???":"E","???":"e","???":"E","???":"e","???":"I","???":"i","???":"I","???":"i","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"O","???":"o","???":"U","???":"u","???":"U","???":"u","???":"U","???":"u","???":"U","???":"u","???":"U","???":"u","???":"U","???":"u","???":"U","???":"u","???":"Y","???":"y","???":"Y","???":"y","???":"Y","???":"y","???":"Y","???":"y","???":"\'","???":"\'","???":"\\\"","???":"\\\"","???":"+","???":"*","???":"...","???":"ecu","???":"cruzeiro","???":"french franc","???":"lira","???":"mill","???":"naira","???":"peseta","???":"rupee","???":"won","???":"new shequel","???":"dong","???":"euro","???":"kip","???":"tugrik","???":"drachma","???":"penny","???":"peso","???":"guarani","???":"austral","???":"hryvnia","???":"cedi","???":"kazakhstani tenge","???":"indian rupee","???":"turkish lira","???":"russian ruble","???":"bitcoin","???":"sm","???":"tm","???":"d","???":"delta","???":"sum","???":"infinity","???":"love","???":"yuan","???":"yen","???":"rial"}')
  var locales = JSON.parse('{"de":{"??":"AE","??":"ae","??":"OE","??":"oe","??":"UE","??":"ue"},"vi":{"??":"D","??":"d"}}')

  function replace (string, options) {
    if (typeof string !== 'string') {
      throw new Error('slugify: string argument expected')
    }

    options = (typeof options === 'string')
      ? {replacement: options}
      : options || {}

    var locale = locales[options.locale] || {}

    var replacement = options.replacement === undefined ? '-' : options.replacement

    var slug = string.split('')
      // replace characters based on charMap
      .reduce(function (result, ch) {
        return result + (locale[ch] || charMap[ch] || ch)
          // remove not allowed characters
          .replace(options.remove || /[^\w\s$*_+~.()'"!\-:@]+/g, '')
      }, '')
      // trim leading/trailing spaces
      .trim()
      // convert spaces to replacement character
      // also remove duplicates of the replacement character
      .replace(new RegExp('[\\s' + replacement + ']+', 'g'), replacement)

    if (options.lower) {
      slug = slug.toLowerCase()
    }

    if (options.strict) {
      // remove anything besides letters, numbers, and the replacement char
      slug = slug
        .replace(new RegExp('[^a-zA-Z0-9' + replacement + ']', 'g'), '')
        // remove duplicates of the replacement character
        .replace(new RegExp('[\\s' + replacement + ']+', 'g'), replacement)
    }

    return slug
  }

  replace.extend = function (customMap) {
    for (var key in customMap) {
      charMap[key] = customMap[key]
    }
  }

  return replace
}))


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css&":
/*!***************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--5-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--5-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css& ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--5-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--5-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css&");

if(typeof content === 'string') content = [[module.i, content, '']];

var transform;
var insertInto;



var options = {"hmr":true}

options.transform = transform
options.insertInto = undefined;

var update = __webpack_require__(/*! ../../../node_modules/style-loader/lib/addStyles.js */ "./node_modules/style-loader/lib/addStyles.js")(content, options);

if(content.locals) module.exports = content.locals;

if(false) {}

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=template&id=d4e65390&scoped=true&":
/*!********************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newproduct.vue?vue&type=template&id=d4e65390&scoped=true& ***!
  \********************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm._m(0),
    _vm._v(" "),
    _c("div", { staticClass: "wrapper wrapper-content animated fadeInRight" }, [
      _c("div", { staticClass: "row" }, [
        _c("div", { staticClass: "col-lg-12" }, [
          _c("div", { staticClass: "ibox" }, [
            _c("div", {}, [
              _c("div", { staticClass: "col-lg-12" }, [
                _c(
                  "form",
                  {
                    staticClass: "form",
                    attrs: {
                      enctype: "multipart/form-data",
                      method: "post",
                      id: "addFrm"
                    },
                    on: {
                      submit: function($event) {
                        $event.preventDefault()
                        return _vm.submit($event)
                      }
                    }
                  },
                  [
                    _c("fieldset", [
                      _c("div", { staticClass: "row" }, [
                        _c("div", { staticClass: "col-md-9" }, [
                          _c("div", { staticClass: "col-md-12" }, [
                            _c("fieldset", { staticClass: "form-group" }, [
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.name,
                                    expression: "form.name"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: { type: "text", placeholder: "Name" },
                                domProps: { value: _vm.form.name },
                                on: {
                                  input: function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.$set(
                                      _vm.form,
                                      "name",
                                      $event.target.value
                                    )
                                  }
                                }
                              }),
                              _vm._v(" "),
                              _vm.data
                                ? _c(
                                    "strong",
                                    {
                                      staticStyle: {
                                        "text-transform": "lowercase"
                                      }
                                    },
                                    [
                                      _vm._v(
                                        _vm._s(_vm.appurl) +
                                          "/productdetail/" +
                                          _vm._s(_vm.slug) +
                                          "/" +
                                          _vm._s(_vm.data.id)
                                      )
                                    ]
                                  )
                                : _vm._e()
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-12 mb-1" }, [
                            _c("fieldset", { staticClass: "form-group" }, [
                              _vm._m(1),
                              _vm._v(" "),
                              _c("div", { staticClass: "ibox" }, [
                                _c(
                                  "div",
                                  { staticClass: "ibox-content no-padding" },
                                  [
                                    _c("vue-editor", {
                                      model: {
                                        value: _vm.form.description,
                                        callback: function($$v) {
                                          _vm.$set(_vm.form, "description", $$v)
                                        },
                                        expression: "form.description"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ])
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-12" }, [
                            _c("fieldset", { staticClass: "form-group" }, [
                              _c("label", [_vm._v("USD")]),
                              _vm._v(" "),
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.usd,
                                    expression: "form.usd"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: { type: "text", placeholder: "USD" },
                                domProps: { value: _vm.form.usd },
                                on: {
                                  input: function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.$set(
                                      _vm.form,
                                      "usd",
                                      $event.target.value
                                    )
                                  }
                                }
                              })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-12" }, [
                            _c("fieldset", { staticClass: "form-group" }, [
                              _c("label", [_vm._v("Front part")]),
                              _vm._v(" "),
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.frontpart,
                                    expression: "form.frontpart"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: {
                                  type: "text",
                                  placeholder: "Front part"
                                },
                                domProps: { value: _vm.form.frontpart },
                                on: {
                                  input: function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.$set(
                                      _vm.form,
                                      "frontpart",
                                      $event.target.value
                                    )
                                  }
                                }
                              })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-12" }, [
                            _c("fieldset", { staticClass: "form-group" }, [
                              _c("label", [_vm._v("Back part")]),
                              _vm._v(" "),
                              _c("input", {
                                directives: [
                                  {
                                    name: "model",
                                    rawName: "v-model",
                                    value: _vm.form.backpart,
                                    expression: "form.backpart"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: {
                                  type: "text",
                                  placeholder: "Back part"
                                },
                                domProps: { value: _vm.form.backpart },
                                on: {
                                  input: function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.$set(
                                      _vm.form,
                                      "backpart",
                                      $event.target.value
                                    )
                                  }
                                }
                              })
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-12 mb-1" }, [
                            _c("fieldset", { staticClass: "form-group" }, [
                              _vm._m(2),
                              _vm._v(" "),
                              _c("div", { staticClass: "ibox" }, [
                                _c(
                                  "div",
                                  { staticClass: "ibox-content no-padding" },
                                  _vm._l(_vm.specification, function(
                                    item,
                                    index
                                  ) {
                                    return _c(
                                      "div",
                                      { key: index, staticClass: "row" },
                                      [
                                        _c("div", { staticClass: "col-md-5" }, [
                                          _c(
                                            "fieldset",
                                            { staticClass: "form-group" },
                                            [
                                              _c("input", {
                                                directives: [
                                                  {
                                                    name: "model",
                                                    rawName: "v-model",
                                                    value:
                                                      item.specificationName,
                                                    expression:
                                                      "item.specificationName"
                                                  }
                                                ],
                                                staticClass: "form-control",
                                                attrs: {
                                                  type: "text",
                                                  placeholder:
                                                    "Specification Name"
                                                },
                                                domProps: {
                                                  value: item.specificationName
                                                },
                                                on: {
                                                  input: function($event) {
                                                    if (
                                                      $event.target.composing
                                                    ) {
                                                      return
                                                    }
                                                    _vm.$set(
                                                      item,
                                                      "specificationName",
                                                      $event.target.value
                                                    )
                                                  }
                                                }
                                              })
                                            ]
                                          )
                                        ]),
                                        _vm._v(" "),
                                        _c("div", { staticClass: "col-md-5" }, [
                                          _c(
                                            "fieldset",
                                            { staticClass: "form-group" },
                                            [
                                              _c("input", {
                                                directives: [
                                                  {
                                                    name: "model",
                                                    rawName: "v-model",
                                                    value:
                                                      item.specificationValue,
                                                    expression:
                                                      "item.specificationValue"
                                                  }
                                                ],
                                                staticClass: "form-control",
                                                attrs: {
                                                  type: "text",
                                                  placeholder:
                                                    "Specification Value"
                                                },
                                                domProps: {
                                                  value: item.specificationValue
                                                },
                                                on: {
                                                  input: function($event) {
                                                    if (
                                                      $event.target.composing
                                                    ) {
                                                      return
                                                    }
                                                    _vm.$set(
                                                      item,
                                                      "specificationValue",
                                                      $event.target.value
                                                    )
                                                  }
                                                }
                                              })
                                            ]
                                          )
                                        ]),
                                        _vm._v(" "),
                                        _c("div", { staticClass: "col-md-2" }, [
                                          _c(
                                            "button",
                                            {
                                              on: {
                                                click: function($event) {
                                                  $event.preventDefault()
                                                  return _vm.additems($event)
                                                }
                                              }
                                            },
                                            [_vm._v("+")]
                                          ),
                                          _vm._v(" "),
                                          _vm.specification.length > 1
                                            ? _c(
                                                "button",
                                                {
                                                  on: {
                                                    click: function($event) {
                                                      $event.preventDefault()
                                                      return _vm.delitems(index)
                                                    }
                                                  }
                                                },
                                                [_vm._v("-")]
                                              )
                                            : _vm._e()
                                        ])
                                      ]
                                    )
                                  }),
                                  0
                                )
                              ])
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-3" }, [
                          _c("div", { staticClass: "ibox" }, [
                            _vm._m(3),
                            _vm._v(" "),
                            _c("div", { staticClass: "ibox-content" }, [
                              _c("p", [_vm._v("Publish")]),
                              _vm._v(" "),
                              _c(
                                "select",
                                {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.form.status,
                                      expression: "form.status"
                                    }
                                  ],
                                  staticStyle: { width: "100%" },
                                  on: {
                                    change: function($event) {
                                      var $$selectedVal = Array.prototype.filter
                                        .call($event.target.options, function(
                                          o
                                        ) {
                                          return o.selected
                                        })
                                        .map(function(o) {
                                          var val =
                                            "_value" in o ? o._value : o.value
                                          return val
                                        })
                                      _vm.$set(
                                        _vm.form,
                                        "status",
                                        $event.target.multiple
                                          ? $$selectedVal
                                          : $$selectedVal[0]
                                      )
                                    }
                                  }
                                },
                                [
                                  _c("option", { attrs: { value: "0" } }, [
                                    _vm._v("No")
                                  ]),
                                  _vm._v(" "),
                                  _c("option", { attrs: { value: "1" } }, [
                                    _vm._v("Yes")
                                  ])
                                ]
                              )
                            ]),
                            _vm._v(" "),
                            _vm._m(4)
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "ibox" }, [
                            _vm._m(5),
                            _vm._v(" "),
                            _c("div", { staticClass: "ibox-content" }, [
                              _c("p", [_vm._v("Make")]),
                              _vm._v(" "),
                              _c(
                                "select",
                                {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.form.make_id,
                                      expression: "form.make_id"
                                    }
                                  ],
                                  staticStyle: { width: "100%" },
                                  on: {
                                    change: [
                                      function($event) {
                                        var $$selectedVal = Array.prototype.filter
                                          .call($event.target.options, function(
                                            o
                                          ) {
                                            return o.selected
                                          })
                                          .map(function(o) {
                                            var val =
                                              "_value" in o ? o._value : o.value
                                            return val
                                          })
                                        _vm.$set(
                                          _vm.form,
                                          "make_id",
                                          $event.target.multiple
                                            ? $$selectedVal
                                            : $$selectedVal[0]
                                        )
                                      },
                                      _vm.setmodel
                                    ]
                                  }
                                },
                                _vm._l(_vm.make, function(item) {
                                  return _c(
                                    "option",
                                    { domProps: { value: item.id } },
                                    [
                                      _vm._v(
                                        "\n                                " +
                                          _vm._s(item.name) +
                                          "\n                              "
                                      )
                                    ]
                                  )
                                }),
                                0
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "ibox" }, [
                            _vm._m(6),
                            _vm._v(" "),
                            _c("div", { staticClass: "ibox-content" }, [
                              _c("p", [_vm._v("Models")]),
                              _vm._v(" "),
                              _c(
                                "select",
                                {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.form.models_id,
                                      expression: "form.models_id"
                                    }
                                  ],
                                  staticStyle: { width: "100%" },
                                  on: {
                                    change: function($event) {
                                      var $$selectedVal = Array.prototype.filter
                                        .call($event.target.options, function(
                                          o
                                        ) {
                                          return o.selected
                                        })
                                        .map(function(o) {
                                          var val =
                                            "_value" in o ? o._value : o.value
                                          return val
                                        })
                                      _vm.$set(
                                        _vm.form,
                                        "models_id",
                                        $event.target.multiple
                                          ? $$selectedVal
                                          : $$selectedVal[0]
                                      )
                                    }
                                  }
                                },
                                _vm._l(_vm.models, function(item) {
                                  return _c(
                                    "option",
                                    { domProps: { value: item.id } },
                                    [
                                      _vm._v(
                                        "\n                                " +
                                          _vm._s(item.name) +
                                          "\n                              "
                                      )
                                    ]
                                  )
                                }),
                                0
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "ibox" }, [
                            _vm._m(7),
                            _vm._v(" "),
                            _c("div", { staticClass: "ibox-content" }, [
                              _c("p", [_vm._v("Category")]),
                              _vm._v(" "),
                              _c(
                                "select",
                                {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.form.category_id,
                                      expression: "form.category_id"
                                    }
                                  ],
                                  staticStyle: { width: "100%" },
                                  on: {
                                    change: [
                                      function($event) {
                                        var $$selectedVal = Array.prototype.filter
                                          .call($event.target.options, function(
                                            o
                                          ) {
                                            return o.selected
                                          })
                                          .map(function(o) {
                                            var val =
                                              "_value" in o ? o._value : o.value
                                            return val
                                          })
                                        _vm.$set(
                                          _vm.form,
                                          "category_id",
                                          $event.target.multiple
                                            ? $$selectedVal
                                            : $$selectedVal[0]
                                        )
                                      },
                                      _vm.setsubcat
                                    ]
                                  }
                                },
                                _vm._l(_vm.category, function(item) {
                                  return _c(
                                    "option",
                                    { domProps: { value: item.id } },
                                    [
                                      _vm._v(
                                        "\n                                " +
                                          _vm._s(item.name) +
                                          "\n                              "
                                      )
                                    ]
                                  )
                                }),
                                0
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "ibox" }, [
                            _vm._m(8),
                            _vm._v(" "),
                            _c("div", { staticClass: "ibox-content" }, [
                              _c("p", [_vm._v("Subcategory")]),
                              _vm._v(" "),
                              _c(
                                "select",
                                {
                                  directives: [
                                    {
                                      name: "model",
                                      rawName: "v-model",
                                      value: _vm.form.subcategory_id,
                                      expression: "form.subcategory_id"
                                    }
                                  ],
                                  staticStyle: { width: "100%" },
                                  on: {
                                    change: function($event) {
                                      var $$selectedVal = Array.prototype.filter
                                        .call($event.target.options, function(
                                          o
                                        ) {
                                          return o.selected
                                        })
                                        .map(function(o) {
                                          var val =
                                            "_value" in o ? o._value : o.value
                                          return val
                                        })
                                      _vm.$set(
                                        _vm.form,
                                        "subcategory_id",
                                        $event.target.multiple
                                          ? $$selectedVal
                                          : $$selectedVal[0]
                                      )
                                    }
                                  }
                                },
                                _vm._l(_vm.subcategory, function(item) {
                                  return _c(
                                    "option",
                                    { domProps: { value: item.id } },
                                    [
                                      _vm._v(
                                        "\n                                " +
                                          _vm._s(item.name) +
                                          "\n                              "
                                      )
                                    ]
                                  )
                                }),
                                0
                              )
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "ibox" }, [
                            _vm._m(9),
                            _vm._v(" "),
                            _c("div", { staticClass: "ibox-content" }, [
                              _c("p", [_vm._v("Image")]),
                              _vm._v(" "),
                              _c("input", {
                                ref: "file",
                                attrs: {
                                  type: "file",
                                  width: "100",
                                  name: "image"
                                },
                                on: { change: _vm.onFileChange }
                              }),
                              _vm._v(" "),
                              _vm.form.image
                                ? _c(
                                    "div",
                                    { attrs: { id: "image_preview" } },
                                    [
                                      _c("img", {
                                        attrs: {
                                          src:
                                            _vm.$page.props.appurl +
                                            "/" +
                                            _vm.form.image
                                        }
                                      })
                                    ]
                                  )
                                : _vm._e()
                            ])
                          ])
                        ])
                      ])
                    ])
                  ]
                )
              ])
            ])
          ])
        ])
      ])
    ])
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "div",
      { staticClass: "row wrapper border-bottom white-bg page-heading" },
      [
        _c("div", { staticClass: "col-lg-10" }, [
          _c("h2", [_vm._v("Add New Product")]),
          _vm._v(" "),
          _c("ol", { staticClass: "breadcrumb" }, [
            _c("li", { staticClass: "breadcrumb-item" }, [
              _c("a", { attrs: { href: "" } }, [_vm._v("Home")])
            ]),
            _vm._v(" "),
            _c("li", { staticClass: "breadcrumb-item" }, [
              _c("a", { attrs: { href: "" } }, [_vm._v("Products")])
            ]),
            _vm._v(" "),
            _c("li", { staticClass: "breadcrumb-item active" }, [
              _c("strong", [_vm._v("Add Product")])
            ])
          ])
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "col-lg-2" })
      ]
    )
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "basicInput" } }, [
      _vm._v("Description\n                              "),
      _c("span", { staticClass: "requiredstar" }, [_vm._v("*")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("label", { attrs: { for: "basicInput" } }, [
      _vm._v("Specification\n                              "),
      _c("span", { staticClass: "requiredstar" }, [_vm._v("*")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Status")]),
        _vm._v(" "),
        _c("a", { staticClass: "collapse-link" }, [
          _c("i", { staticClass: "fa fa-chevron-up" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-12 mb-1 publish text-right" }, [
      _c(
        "button",
        {
          staticClass: "btn btn-primary",
          attrs: { type: "submit", id: "cr-person" }
        },
        [
          _vm._v(
            "\n                              Save\n                            "
          )
        ]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Make")]),
        _vm._v(" "),
        _c("a", { staticClass: "collapse-link" }, [
          _c("i", { staticClass: "fa fa-chevron-up" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Models")]),
        _vm._v(" "),
        _c("a", { staticClass: "collapse-link" }, [
          _c("i", { staticClass: "fa fa-chevron-up" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Category")]),
        _vm._v(" "),
        _c("a", { staticClass: "collapse-link" }, [
          _c("i", { staticClass: "fa fa-chevron-up" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Subcategory")]),
        _vm._v(" "),
        _c("a", { staticClass: "collapse-link" }, [
          _c("i", { staticClass: "fa fa-chevron-up" })
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Product Image")]),
        _vm._v(" "),
        _c("a", { staticClass: "collapse-link" }, [
          _c("i", { staticClass: "fa fa-chevron-up" })
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/Pages/Newproduct.vue":
/*!*******************************************!*\
  !*** ./resources/js/Pages/Newproduct.vue ***!
  \*******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Newproduct_vue_vue_type_template_id_d4e65390_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Newproduct.vue?vue&type=template&id=d4e65390&scoped=true& */ "./resources/js/Pages/Newproduct.vue?vue&type=template&id=d4e65390&scoped=true&");
/* harmony import */ var _Newproduct_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Newproduct.vue?vue&type=script&lang=js& */ "./resources/js/Pages/Newproduct.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css& */ "./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Newproduct_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Newproduct_vue_vue_type_template_id_d4e65390_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Newproduct_vue_vue_type_template_id_d4e65390_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "d4e65390",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/Newproduct.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/Newproduct.vue?vue&type=script&lang=js&":
/*!********************************************************************!*\
  !*** ./resources/js/Pages/Newproduct.vue?vue&type=script&lang=js& ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Newproduct.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css&":
/*!****************************************************************************************************!*\
  !*** ./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css& ***!
  \****************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--5-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--5-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=style&index=0&id=d4e65390&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_style_index_0_id_d4e65390_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/Pages/Newproduct.vue?vue&type=template&id=d4e65390&scoped=true&":
/*!**************************************************************************************!*\
  !*** ./resources/js/Pages/Newproduct.vue?vue&type=template&id=d4e65390&scoped=true& ***!
  \**************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_template_id_d4e65390_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Newproduct.vue?vue&type=template&id=d4e65390&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newproduct.vue?vue&type=template&id=d4e65390&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_template_id_d4e65390_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newproduct_vue_vue_type_template_id_d4e65390_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);