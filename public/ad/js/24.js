(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[24],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=script&lang=js&":
/*!*************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newpost.vue?vue&type=script&lang=js& ***!
  \*************************************************************************************************************************************************************/
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


/* harmony default export */ __webpack_exports__["default"] = ({
  layout: _Adminlayout_App__WEBPACK_IMPORTED_MODULE_1__["default"],
  components: {
    App: _Adminlayout_App__WEBPACK_IMPORTED_MODULE_1__["default"],
    VueEditor: vue2_editor__WEBPACK_IMPORTED_MODULE_0__["VueEditor"]
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
    if (this.data) this.form = this.data;
  },
  data: function data() {
    return {
      error: null,
      form: {
        title: "",
        content: "",
        metaDescription: "",
        status: 1,
        image: ''
      },
      pageImage: null
    };
  },
  methods: {
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
        frm.append('pageImage', this.pageImage);
      }

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

/***/ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css&":
/*!********************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/css-loader??ref--5-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--5-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css& ***!
  \********************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(/*! ../../../node_modules/css-loader/lib/css-base.js */ "./node_modules/css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "\n.wrapper-content[data-v-5ba7aaa7] {\n\t\tbox-shadow: 0px 7px 23px -10px #000 !important;\n}\nlabel[data-v-5ba7aaa7] {\n\t\tfont-weight: 600 !important;\n}\n.note-editor.note-frame .note-editing-area .note-editable[data-v-5ba7aaa7] {\n\t\theight: 280px !important;\n}\n.note-editor.note-frame[data-v-5ba7aaa7] {\n\t\tborder: 1px solid #ccc;\n}\n.publish[data-v-5ba7aaa7] {\n\t\tpadding: 10px;\n\t\tborder: 1px solid #F5F5DA;\n\t\tbackground: #F5F5FA;\n}\n#image_preview img[data-v-5ba7aaa7] {\n    width: 100%;\n    height: 170px;\n    border: 3px solid #ccc;\n}\n#image_preview1 img[data-v-5ba7aaa7] {\n    width: 100%;\n    height: 170px;\n    border: 3px solid #ccc;\n}\n", ""]);

// exports


/***/ }),

/***/ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css&":
/*!************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/style-loader!./node_modules/css-loader??ref--5-1!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src??ref--5-2!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css& ***!
  \************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {


var content = __webpack_require__(/*! !../../../node_modules/css-loader??ref--5-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--5-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css& */ "./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css&");

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

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true&":
/*!*****************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/Pages/Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true& ***!
  \*****************************************************************************************************************************************************************************************************************/
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
                                    value: _vm.form.title,
                                    expression: "form.title"
                                  }
                                ],
                                staticClass: "form-control",
                                attrs: {
                                  type: "text",
                                  placeholder: "Post title",
                                  name: "title",
                                  id: "title"
                                },
                                domProps: { value: _vm.form.title },
                                on: {
                                  input: function($event) {
                                    if ($event.target.composing) {
                                      return
                                    }
                                    _vm.$set(
                                      _vm.form,
                                      "title",
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
                              _vm._m(1),
                              _vm._v(" "),
                              _c("div", { staticClass: "ibox " }, [
                                _c(
                                  "div",
                                  { staticClass: "ibox-content no-padding" },
                                  [
                                    _c("vue-editor", {
                                      model: {
                                        value: _vm.form.content,
                                        callback: function($$v) {
                                          _vm.$set(_vm.form, "content", $$v)
                                        },
                                        expression: "form.content"
                                      }
                                    })
                                  ],
                                  1
                                )
                              ])
                            ])
                          ]),
                          _vm._v(" "),
                          _c("div", { staticClass: "col-md-12 mb-1" }, [
                            _c("div", { staticClass: "ibox " }, [
                              _vm._m(2),
                              _vm._v(" "),
                              _c("div", { staticClass: "ibox-content" }, [
                                _c("fieldset", { staticClass: "form-group" }, [
                                  _c("textarea", {
                                    directives: [
                                      {
                                        name: "model",
                                        rawName: "v-model",
                                        value: _vm.form.metaDescription,
                                        expression: "form.metaDescription"
                                      }
                                    ],
                                    staticClass: "form-control",
                                    attrs: {
                                      placeholder: "Meta description",
                                      name: "meta_description",
                                      id: "meta_description"
                                    },
                                    domProps: {
                                      value: _vm.form.metaDescription
                                    },
                                    on: {
                                      input: function($event) {
                                        if ($event.target.composing) {
                                          return
                                        }
                                        _vm.$set(
                                          _vm.form,
                                          "metaDescription",
                                          $event.target.value
                                        )
                                      }
                                    }
                                  })
                                ])
                              ])
                            ])
                          ])
                        ]),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-3" }, [
                          _c("div", { staticClass: "ibox " }, [
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
                          _c("div", { staticClass: "ibox " }, [
                            _vm._m(5),
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
          _c("h2", [_vm._v("Add New Post")]),
          _vm._v(" "),
          _c("ol", { staticClass: "breadcrumb" }, [
            _c("li", { staticClass: "breadcrumb-item" }, [
              _c("a", { attrs: { href: "" } }, [_vm._v("Home")])
            ]),
            _vm._v(" "),
            _c("li", { staticClass: "breadcrumb-item" }, [
              _c("a", { attrs: { href: "" } }, [_vm._v("Posts")])
            ]),
            _vm._v(" "),
            _c("li", { staticClass: "breadcrumb-item active" }, [
              _c("strong", [_vm._v("Add Post")])
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
      _vm._v("Content "),
      _c("span", { staticClass: "requiredstar" }, [_vm._v("*")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Meta Description")]),
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
        [_vm._v("Save")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "ibox-title" }, [
      _c("div", { staticClass: "ibox-tools" }, [
        _c("h5", [_vm._v("Post Image")]),
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

/***/ "./resources/js/Pages/Newpost.vue":
/*!****************************************!*\
  !*** ./resources/js/Pages/Newpost.vue ***!
  \****************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Newpost_vue_vue_type_template_id_5ba7aaa7_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true& */ "./resources/js/Pages/Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true&");
/* harmony import */ var _Newpost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Newpost.vue?vue&type=script&lang=js& */ "./resources/js/Pages/Newpost.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css& */ "./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");






/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_3__["default"])(
  _Newpost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Newpost_vue_vue_type_template_id_5ba7aaa7_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Newpost_vue_vue_type_template_id_5ba7aaa7_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  "5ba7aaa7",
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/Pages/Newpost.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/Pages/Newpost.vue?vue&type=script&lang=js&":
/*!*****************************************************************!*\
  !*** ./resources/js/Pages/Newpost.vue?vue&type=script&lang=js& ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Newpost.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css&":
/*!*************************************************************************************************!*\
  !*** ./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css& ***!
  \*************************************************************************************************/
/*! no static exports found */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/style-loader!../../../node_modules/css-loader??ref--5-1!../../../node_modules/vue-loader/lib/loaders/stylePostLoader.js!../../../node_modules/postcss-loader/src??ref--5-2!../../../node_modules/vue-loader/lib??vue-loader-options!./Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css& */ "./node_modules/style-loader/index.js!./node_modules/css-loader/index.js?!./node_modules/vue-loader/lib/loaders/stylePostLoader.js!./node_modules/postcss-loader/src/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=style&index=0&id=5ba7aaa7&scoped=true&lang=css&");
/* harmony import */ var _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__);
/* harmony reexport (unknown) */ for(var __WEBPACK_IMPORT_KEY__ in _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__) if(["default"].indexOf(__WEBPACK_IMPORT_KEY__) < 0) (function(key) { __webpack_require__.d(__webpack_exports__, key, function() { return _node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0__[key]; }) }(__WEBPACK_IMPORT_KEY__));
 /* harmony default export */ __webpack_exports__["default"] = (_node_modules_style_loader_index_js_node_modules_css_loader_index_js_ref_5_1_node_modules_vue_loader_lib_loaders_stylePostLoader_js_node_modules_postcss_loader_src_index_js_ref_5_2_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_style_index_0_id_5ba7aaa7_scoped_true_lang_css___WEBPACK_IMPORTED_MODULE_0___default.a); 

/***/ }),

/***/ "./resources/js/Pages/Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true&":
/*!***********************************************************************************!*\
  !*** ./resources/js/Pages/Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true& ***!
  \***********************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_template_id_5ba7aaa7_scoped_true___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/Pages/Newpost.vue?vue&type=template&id=5ba7aaa7&scoped=true&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_template_id_5ba7aaa7_scoped_true___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Newpost_vue_vue_type_template_id_5ba7aaa7_scoped_true___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);