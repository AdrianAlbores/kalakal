"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_views_Sign-Up_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/Sign-Up.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/Sign-Up.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  props: ['signUp'],
  data: function data() {
    return {};
  },
  beforeCreate: function beforeCreate() {
    // Creates the form and adds to it component's "form" property.
    this.form = this.$form.createForm(this, {
      name: 'normal_login'
    });
  },
  methods: {
    signUpToggle: function signUpToggle() {
      this.signUp = false;
    },
    // Handles input validation after submission.
    handleSubmit: function handleSubmit(e) {
      e.preventDefault();
      this.form.validateFields(function (err, values) {
        if (!err) {
          console.log('Received values of form: ', values);
        }
      });
    }
  }
});

/***/ }),

/***/ "./resources/js/views/Sign-Up.vue":
/*!****************************************!*\
  !*** ./resources/js/views/Sign-Up.vue ***!
  \****************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Sign_Up_vue_vue_type_template_id_5e1dd77c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Sign-Up.vue?vue&type=template&id=5e1dd77c& */ "./resources/js/views/Sign-Up.vue?vue&type=template&id=5e1dd77c&");
/* harmony import */ var _Sign_Up_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Sign-Up.vue?vue&type=script&lang=js& */ "./resources/js/views/Sign-Up.vue?vue&type=script&lang=js&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! !../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */
;
var component = (0,_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__.default)(
  _Sign_Up_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__.default,
  _Sign_Up_vue_vue_type_template_id_5e1dd77c___WEBPACK_IMPORTED_MODULE_0__.render,
  _Sign_Up_vue_vue_type_template_id_5e1dd77c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns,
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Sign-Up.vue"
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (component.exports);

/***/ }),

/***/ "./resources/js/views/Sign-Up.vue?vue&type=script&lang=js&":
/*!*****************************************************************!*\
  !*** ./resources/js/views/Sign-Up.vue?vue&type=script&lang=js& ***!
  \*****************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Sign_Up_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sign-Up.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5[0].rules[0].use[0]!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/Sign-Up.vue?vue&type=script&lang=js&");
 /* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (_node_modules_babel_loader_lib_index_js_clonedRuleSet_5_0_rules_0_use_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Sign_Up_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__.default); 

/***/ }),

/***/ "./resources/js/views/Sign-Up.vue?vue&type=template&id=5e1dd77c&":
/*!***********************************************************************!*\
  !*** ./resources/js/views/Sign-Up.vue?vue&type=template&id=5e1dd77c& ***!
  \***********************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sign_Up_vue_vue_type_template_id_5e1dd77c___WEBPACK_IMPORTED_MODULE_0__.render),
/* harmony export */   "staticRenderFns": () => (/* reexport safe */ _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sign_Up_vue_vue_type_template_id_5e1dd77c___WEBPACK_IMPORTED_MODULE_0__.staticRenderFns)
/* harmony export */ });
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Sign_Up_vue_vue_type_template_id_5e1dd77c___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib/index.js??vue-loader-options!./Sign-Up.vue?vue&type=template&id=5e1dd77c& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/Sign-Up.vue?vue&type=template&id=5e1dd77c&");


/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/Sign-Up.vue?vue&type=template&id=5e1dd77c&":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib/index.js??vue-loader-options!./resources/js/views/Sign-Up.vue?vue&type=template&id=5e1dd77c& ***!
  \**************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render),
/* harmony export */   "staticRenderFns": () => (/* binding */ staticRenderFns)
/* harmony export */ });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "div",
    [
      _c(
        "a-card",
        {
          staticClass: "card-signup header-solid h-full",
          staticStyle: { "margin-top": "5rem" },
          attrs: { bordered: false, bodyStyle: { paddingTop: 0 } },
          scopedSlots: _vm._u([
            {
              key: "title",
              fn: function() {
                return [
                  _c("h5", { staticClass: "font-semibold text-center" }, [
                    _vm._v("Register")
                  ])
                ]
              },
              proxy: true
            }
          ])
        },
        [
          _vm._v(" "),
          _c(
            "a-form",
            {
              staticClass: "login-form",
              attrs: {
                id: "components-form-demo-normal-login",
                form: _vm.form
              },
              on: { submit: _vm.handleSubmit }
            },
            [
              _c(
                "a-form-item",
                { staticClass: "mb-10" },
                [
                  _c("a-input", {
                    directives: [
                      {
                        name: "decorator",
                        rawName: "v-decorator",
                        value: [
                          "name",
                          {
                            rules: [
                              {
                                required: true,
                                message: "Please input your name!"
                              }
                            ]
                          }
                        ],
                        expression:
                          "[\n\t\t\t\t\t'name',\n\t\t\t\t\t{ rules: [{ required: true, message: 'Please input your name!' }] },\n\t\t\t\t\t]"
                      }
                    ],
                    attrs: { placeholder: "Name" }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "a-form-item",
                { staticClass: "mb-10" },
                [
                  _c("a-input", {
                    directives: [
                      {
                        name: "decorator",
                        rawName: "v-decorator",
                        value: [
                          "email",
                          {
                            rules: [
                              {
                                required: true,
                                message: "Please input your email!"
                              }
                            ]
                          }
                        ],
                        expression:
                          "[\n\t\t\t\t\t'email',\n\t\t\t\t\t{ rules: [{ required: true, message: 'Please input your email!' }] },\n\t\t\t\t\t]"
                      }
                    ],
                    attrs: { placeholder: "Email" }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "a-form-item",
                { staticClass: "mb-5" },
                [
                  _c("a-input", {
                    directives: [
                      {
                        name: "decorator",
                        rawName: "v-decorator",
                        value: [
                          "password",
                          {
                            rules: [
                              {
                                required: true,
                                message: "Please input your Password!"
                              }
                            ]
                          }
                        ],
                        expression:
                          "[\n\t\t\t\t\t'password',\n\t\t\t\t\t{ rules: [{ required: true, message: 'Please input your Password!' }] },\n\t\t\t\t\t]"
                      }
                    ],
                    attrs: { type: "password", placeholder: "Password" }
                  })
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "a-form-item",
                { staticClass: "mb-10" },
                [
                  _c(
                    "a-checkbox",
                    {
                      directives: [
                        {
                          name: "decorator",
                          rawName: "v-decorator",
                          value: [
                            "remember",
                            {
                              valuePropName: "checked",
                              initialValue: true
                            }
                          ],
                          expression:
                            "[\n\t\t\t\t\t'remember',\n\t\t\t\t\t{\n\t\t\t\t\t\tvaluePropName: 'checked',\n\t\t\t\t\t\tinitialValue: true,\n\t\t\t\t\t},\n\t\t\t\t\t]"
                        }
                      ]
                    },
                    [
                      _vm._v("\n\t\t\t\t\tI agree the "),
                      _c(
                        "a",
                        {
                          staticClass: "font-bold text-dark",
                          attrs: { href: "#" }
                        },
                        [_vm._v("Terms and Conditions")]
                      )
                    ]
                  )
                ],
                1
              ),
              _vm._v(" "),
              _c(
                "a-form-item",
                [
                  _c(
                    "a-button",
                    {
                      staticClass: "login-form-button",
                      attrs: {
                        type: "primary",
                        block: "",
                        "html-type": "submit"
                      }
                    },
                    [_vm._v("\n\t\t\t\t\tSIGN UP\n\t\t\t\t")]
                  )
                ],
                1
              )
            ],
            1
          ),
          _vm._v(" "),
          _c("p", { staticClass: "font-semibold text-muted text-center" }, [
            _vm._v("Already have an account? "),
            _c(
              "a",
              {
                attrs: { href: "javascript:void(0)" },
                on: { click: _vm.signUpToggle }
              },
              [_vm._v(" Sign In ")]
            )
          ])
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ })

}]);