(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[10],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newslider.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Adminlayout_App__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @/Adminlayout/App */ "./resources/js/Adminlayout/App.vue");
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
// import { VueEditor } from "vue2-editor";

/* harmony default export */ __webpack_exports__["default"] = ({
  layout: _Adminlayout_App__WEBPACK_IMPORTED_MODULE_0__["default"],
  components: {
    App: _Adminlayout_App__WEBPACK_IMPORTED_MODULE_0__["default"]
  },
  props: {
    errors: Object,
    data: null,
    flash: null
  },
  watch: {
    // whenever question changes, this function will run
    errors: function errors(value) {
      $.each(value, function (key, val) {
        // swal("error!", val[0], "error");br
        toastr.error('Error', val[0]);
      });
    }
  },
  mounted: function mounted() {
    if (this.data) {
      this.form = this.data;
      this.form.image = '';
    }
  },
  data: function data() {
    return {
      error: null,
      form: {
        link: "",
        buttonText: "",
        subtitle: "",
        title: ''
      },
      image: null
    };
  },
  methods: {
    onFileChange: function onFileChange() {
      this.image = this.$refs.file.files[0];
      console.log(this.image);
    },
    submit: function submit() {
      var frm = new FormData();
      var myObj = this.form;
      $.each(myObj, function (key, val) {
        if (val != null) frm.append(key, val);else frm.append(key, '');
      });

      if (this.image) {
        frm.append('image', this.image);
      }

      this.$inertia.post(this.$page.url, frm);
    }
  }
});

/***/ }),

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css&":
/*!**********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--5-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--5-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css& ***!
  \**********************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.wrapper-content[data-v-30c962a8] {\n\t\tbox-shadow: 0px 7px 23px -10px #000 !important;\n}\nlabel[data-v-30c962a8] {\n\t\tfont-weight: 600 !important;\n}\n.note-editor.note-frame .note-editing-area .note-editable[data-v-30c962a8] {\n\t\theight: 280px !important;\n}\n.note-editor.note-frame[data-v-30c962a8] {\n\t\tborder: 1px solid #ccc;\n}\n.publish[data-v-30c962a8] {\n\t\tpadding: 10px;\n\t\tborder: 1px solid #F5F5DA;\n\t\tbackground: #F5F5FA;\n}\n#image_preview img[data-v-30c962a8] {\n    width: 100%;\n    height: 170px;\n    border: 3px solid #ccc;\n}\n#image_preview1 img[data-v-30c962a8] {\n    width: 100%;\n    height: 170px;\n    border: 3px solid #ccc;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css&":
/*!**************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--5-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--5-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css& ***!
  \**************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--5-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--5-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css&");

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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=template&id=30c962a8&scoped=true&":
/*!*******************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newslider.vue?vue&type=template&id=30c962a8&scoped=true& ***!
  \*******************************************************************************************************************************************************************************************************************/
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
          _c("div", { staticClass: "ibox border-bottom" }, [
            _vm._m(1),
            _vm._v(" "),
            _c("div", { staticClass: "ibox-content" }, [
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
                  _c("div", { staticClass: "form-group  row" }, [
                    _c("label", { staticClass: "col-sm-2 col-form-label" }, [
                      _vm._v("Image")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-sm-10" }, [
                      _c("input", {
                        ref: "file",
                        staticClass: "form-control",
                        attrs: { type: "file" },
                        on: { change: _vm.onFileChange }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "hr-line-dashed" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group  row" }, [
                    _c("label", { staticClass: "col-sm-2 col-form-label" }, [
                      _vm._v("Title")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-sm-10" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.title,
                            expression: "form.title"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text" },
                        domProps: { value: _vm.form.title },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.form, "title", $event.target.value)
                          }
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "hr-line-dashed" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group row" }, [
                    _c("label", { staticClass: "col-sm-2 col-form-label" }, [
                      _vm._v("Subtitle")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-sm-10" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.subtitle,
                            expression: "form.subtitle"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text" },
                        domProps: { value: _vm.form.subtitle },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.form, "subtitle", $event.target.value)
                          }
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "hr-line-dashed" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group row" }, [
                    _c("label", { staticClass: "col-sm-2 col-form-label" }, [
                      _vm._v("Button Text")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-sm-10" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.buttonText,
                            expression: "form.buttonText"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text" },
                        domProps: { value: _vm.form.buttonText },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(
                              _vm.form,
                              "buttonText",
                              $event.target.value
                            )
                          }
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "hr-line-dashed" }),
                  _vm._v(" "),
                  _c("div", { staticClass: "form-group row" }, [
                    _c("label", { staticClass: "col-sm-2 col-form-label" }, [
                      _vm._v("Link")
                    ]),
                    _vm._v(" "),
                    _c("div", { staticClass: "col-sm-10" }, [
                      _c("input", {
                        directives: [
                          {
                            name: "model",
                            rawName: "v-model",
                            value: _vm.form.link,
                            expression: "form.link"
                          }
                        ],
                        staticClass: "form-control",
                        attrs: { type: "text" },
                        domProps: { value: _vm.form.link },
                        on: {
                          input: function($event) {
                            if ($event.target.composing) {
                              return
                            }
                            _vm.$set(_vm.form, "link", $event.target.value)
                          }
                        }
                      })
                    ])
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "hr-line-dashed" }),
                  _vm._v(" "),
                  _vm._m(2)
                ]
              )
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
          _c("h2", [_vm._v("Add New Slider")]),
          _vm._v(" "),
          _c("ol", { staticClass: "breadcrumb" }, [
            _c("li", { staticClass: "breadcrumb-item" }, [
              _c("a", { attrs: { href: "" } }, [_vm._v("Home")])
            ]),
            _vm._v(" "),
            _c("li", { staticClass: "breadcrumb-item" }, [
              _c("a", { attrs: { href: "" } }, [_vm._v("Sliders")])
            ]),
            _vm._v(" "),
            _c("li", { staticClass: "breadcrumb-item active" }, [
              _c("strong", [_vm._v("Add Slider")])
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
    return _c("div", { staticClass: "ibox-title" }, [
      _c("h5", [_vm._v("Slider Details")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "form-group row" }, [
      _c("div", { staticClass: "col-sm-4 col-sm-offset-2" }, [
        _c(
          "button",
          { staticClass: "btn btn-white btn-sm", attrs: { type: "submit" } },
          [_vm._v("Cancel")]
        ),
        _vm._v(" "),
        _c(
          "button",
          { staticClass: "btn btn-primary btn-sm", attrs: { type: "submit" } },
          [_vm._v("Save changes")]
        )
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () {
        injectStyles.call(
          this,
          (options.functional ? this.parent : this).$root.$options.shadowRoot
        )
      }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functional component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ "./resources/js/Pages/Newslider.vue":
/*!******************************************!*\
  !*** ./resources/js/Pages/Newslider.vue ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Newslider_vue_vue_type_template_id_30c962a8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Newslider.vue?vue&type=template&id=30c962a8&scoped=true& */ "./resources/js/Pages/Newslider.vue?vue&type=template&id=30c962a8&scoped=true&");
/* harmony import */ var _Newslider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Newslider.vue?vue&type=script&lang=js& */ "./resources/js/Pages/Newslider.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css& */ "./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Newslider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Newslider_vue_vue_type_template_id_30c962a8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Newslider_vue_vue_type_template_id_30c962a8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "30c962a8",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/Newslider.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/Newslider.vue?vue&type=script&lang=js&":
/*!*******************************************************************!*\
  !*** ./resources/js/Pages/Newslider.vue?vue&type=script&lang=js& ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Newslider.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css&":
/*!***************************************************************************************************!*\
  !*** ./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css& ***!
  \***************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--5-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--5-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=style&index=0&id=30c962a8&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_style_index_0_id_30c962a8_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/Pages/Newslider.vue?vue&type=template&id=30c962a8&scoped=true&":
/*!*************************************************************************************!*\
  !*** ./resources/js/Pages/Newslider.vue?vue&type=template&id=30c962a8&scoped=true& ***!
  \*************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_template_id_30c962a8_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Newslider.vue?vue&type=template&id=30c962a8&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newslider.vue?vue&type=template&id=30c962a8&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_template_id_30c962a8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newslider_vue_vue_type_template_id_30c962a8_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);