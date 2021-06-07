@extends('layouts.master')
@section('custom-css')
<style data-jss="" data-meta="MuiTouchRipple">
    .MuiTouchRipple-root {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        overflow: hidden;
        position: absolute;
        border-radius: inherit;
        pointer-events: none
    }

    .MuiTouchRipple-ripple {
        opacity: 0;
        position: absolute
    }

    .MuiTouchRipple-rippleVisible {
        opacity: .3;
        animation: MuiTouchRipple-keyframes-enter 550ms cubic-bezier(.4, 0, .2, 1);
        transform: scale(1)
    }

    .MuiTouchRipple-ripplePulsate {
        animation-duration: .2s
    }

    .MuiTouchRipple-child {
        width: 100%;
        height: 100%;
        display: block;
        opacity: 1;
        border-radius: 50%;
        background-color: currentColor
    }

    .MuiTouchRipple-childLeaving {
        opacity: 0;
        animation: MuiTouchRipple-keyframes-exit 550ms cubic-bezier(.4, 0, .2, 1)
    }

    .MuiTouchRipple-childPulsate {
        top: 0;
        left: 0;
        position: absolute;
        animation: MuiTouchRipple-keyframes-pulsate 2.5s cubic-bezier(.4, 0, .2, 1) .2s infinite
    }

    @-webkit-keyframes MuiTouchRipple-keyframes-enter {
        0% {
            opacity: .1;
            transform: scale(0)
        }
        100% {
            opacity: .3;
            transform: scale(1)
        }
    }

    @-webkit-keyframes MuiTouchRipple-keyframes-exit {
        0% {
            opacity: 1
        }
        100% {
            opacity: 0
        }
    }

    @-webkit-keyframes MuiTouchRipple-keyframes-pulsate {
        0% {
            transform: scale(1)
        }
        50% {
            transform: scale(.92)
        }
        100% {
            transform: scale(1)
        }
    }
</style>
<style data-jss="" data-meta="MuiButtonBase">
    .MuiButtonBase-root {
        color: inherit;
        border: 0;
        cursor: pointer;
        margin: 0;
        display: inline-flex;
        outline: 0;
        padding: 0;
        position: relative;
        align-items: center;
        user-select: none;
        border-radius: 0;
        vertical-align: middle;
        -moz-appearance: none;
        justify-content: center;
        text-decoration: none;
        background-color: transparent;
        -webkit-appearance: none;
        -webkit-tap-highlight-color: transparent
    }

    .MuiButtonBase-root::-moz-focus-inner {
        border-style: none
    }

    .MuiButtonBase-root.Mui-disabled {
        cursor: default;
        pointer-events: none
    }

    @media print {
        .MuiButtonBase-root {
            -webkit-print-color-adjust: exact
        }
    }
</style>
<style data-jss="" data-meta="MuiSvgIcon">
    .MuiSvgIcon-root {
        fill: currentColor;
        width: 1em;
        height: 1em;
        display: inline-block;
        font-size: 1.5rem;
        transition: fill .2s cubic-bezier(.4, 0, .2, 1) 0s;
        flex-shrink: 0;
        user-select: none
    }

    .MuiSvgIcon-colorPrimary {
        color: #3f51b5
    }

    .MuiSvgIcon-colorSecondary {
        color: #f50057
    }

    .MuiSvgIcon-colorAction {
        color: rgba(0, 0, 0, .54)
    }

    .MuiSvgIcon-colorError {
        color: #f44336
    }

    .MuiSvgIcon-colorDisabled {
        color: rgba(0, 0, 0, .26)
    }

    .MuiSvgIcon-fontSizeInherit {
        font-size: inherit
    }

    .MuiSvgIcon-fontSizeSmall {
        font-size: 1.25rem
    }

    .MuiSvgIcon-fontSizeLarge {
        font-size: 2.1875rem
    }
</style>
<style data-jss="" data-meta="MuiInputBase">
    .MuiInputBase-root {
        color: rgba(0, 0, 0, .87);
        cursor: text;
        display: inline-flex;
        position: relative;
        font-size: 1rem;
        box-sizing: border-box;
        align-items: center;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-weight: 400;
        line-height: 1.1876em;
        letter-spacing: .00938em
    }

    .MuiInputBase-root.Mui-disabled {
        color: rgba(0, 0, 0, .38);
        cursor: default
    }

    .MuiInputBase-multiline {
        padding: 6px 0 7px
    }

    .MuiInputBase-multiline.MuiInputBase-marginDense {
        padding-top: 3px
    }

    .MuiInputBase-fullWidth {
        width: 100%
    }

    .MuiInputBase-input {
        font: inherit;
        color: currentColor;
        width: 100%;
        border: 0;
        height: 1.1876em;
        margin: 0;
        display: block;
        padding: 6px 0 7px;
        min-width: 0;
        background: 0 0;
        box-sizing: content-box;
        animation-name: mui-auto-fill-cancel;
        letter-spacing: inherit;
        animation-duration: 10ms;
        -webkit-tap-highlight-color: transparent
    }

    .MuiInputBase-input::-webkit-input-placeholder {
        color: currentColor;
        opacity: .42;
        transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
    }

    .MuiInputBase-input::-moz-placeholder {
        color: currentColor;
        opacity: .42;
        transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
    }

    .MuiInputBase-input:-ms-input-placeholder {
        color: currentColor;
        opacity: .42;
        transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
    }

    .MuiInputBase-input::-ms-input-placeholder {
        color: currentColor;
        opacity: .42;
        transition: opacity .2s cubic-bezier(.4, 0, .2, 1) 0s
    }

    .MuiInputBase-input:focus {
        outline: 0
    }

    .MuiInputBase-input:invalid {
        box-shadow: none
    }

    .MuiInputBase-input::-webkit-search-decoration {
        -webkit-appearance: none
    }

    .MuiInputBase-input.Mui-disabled {
        opacity: 1
    }

    .MuiInputBase-input:-webkit-autofill {
        animation-name: mui-auto-fill;
        animation-duration: 5000s
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-webkit-input-placeholder {
        opacity: 0!important
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-moz-placeholder {
        opacity: 0!important
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:-ms-input-placeholder {
        opacity: 0!important
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input::-ms-input-placeholder {
        opacity: 0!important
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-webkit-input-placeholder {
        opacity: .42
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-moz-placeholder {
        opacity: .42
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus:-ms-input-placeholder {
        opacity: .42
    }

    label[data-shrink=false]+.MuiInputBase-formControl .MuiInputBase-input:focus::-ms-input-placeholder {
        opacity: .42
    }

    .MuiInputBase-inputMarginDense {
        padding-top: 3px
    }

    .MuiInputBase-inputMultiline {
        height: auto;
        resize: none;
        padding: 0
    }

    .MuiInputBase-inputTypeSearch {
        -moz-appearance: textfield;
        -webkit-appearance: textfield
    }
</style>
<style data-jss="" data-meta="MuiFormControl">
    .MuiFormControl-root {
        border: 0;
        margin: 0;
        display: inline-flex;
        padding: 0;
        position: relative;
        min-width: 0;
        flex-direction: column;
        vertical-align: top
    }

    .MuiFormControl-marginNormal {
        margin-top: 16px;
        margin-bottom: 8px
    }

    .MuiFormControl-marginDense {
        margin-top: 8px;
        margin-bottom: 4px
    }

    .MuiFormControl-fullWidth {
        width: 100%
    }
</style>
<style data-jss="" data-meta="MuiPopover">
    .MuiPopover-paper {
        outline: 0;
        position: absolute;
        max-width: calc(100% - 32px);
        min-width: 16px;
        max-height: calc(100% - 32px);
        min-height: 16px;
        overflow-x: hidden;
        overflow-y: auto
    }
</style>
<style data-jss="" data-meta="MuiMenu">
    .MuiMenu-paper {
        max-height: calc(100% - 96px);
        -webkit-overflow-scrolling: touch
    }

    .MuiMenu-list {
        outline: 0
    }
</style>
<style data-jss="" data-meta="MuiSelect">
    .MuiSelect-select {
        cursor: pointer;
        min-width: 16px;
        user-select: none;
        border-radius: 0;
        -moz-appearance: none;
        -webkit-appearance: none
    }

    .MuiSelect-select:focus {
        border-radius: 0;
        background-color: rgba(0, 0, 0, .05)
    }

    .MuiSelect-select::-ms-expand {
        display: none
    }

    .MuiSelect-select.Mui-disabled {
        cursor: default
    }

    .MuiSelect-select[multiple] {
        height: auto
    }

    .MuiSelect-select:not([multiple]) optgroup,
    .MuiSelect-select:not([multiple]) option {
        background-color: #fff
    }

    .MuiSelect-select.MuiSelect-select {
        padding-right: 24px
    }

    .MuiSelect-filled.MuiSelect-filled {
        padding-right: 32px
    }

    .MuiSelect-outlined {
        border-radius: 4px
    }

    .MuiSelect-outlined.MuiSelect-outlined {
        padding-right: 32px
    }

    .MuiSelect-selectMenu {
        height: auto;
        overflow: hidden;
        min-height: 1.1876em;
        white-space: nowrap;
        text-overflow: ellipsis
    }

    .MuiSelect-icon {
        top: calc(50% - 12px);
        color: rgba(0, 0, 0, .54);
        right: 0;
        position: absolute;
        pointer-events: none
    }

    .MuiSelect-icon.Mui-disabled {
        color: rgba(0, 0, 0, .26)
    }

    .MuiSelect-iconOpen {
        transform: rotate(180deg)
    }

    .MuiSelect-iconFilled {
        right: 7px
    }

    .MuiSelect-iconOutlined {
        right: 7px
    }

    .MuiSelect-nativeInput {
        left: 0;
        width: 100%;
        bottom: 0;
        opacity: 0;
        position: absolute;
        pointer-events: none
    }
</style>
<style data-jss="" data-meta="MuiButton">
    .MuiButton-root {
        color: rgba(0, 0, 0, .87);
        padding: 6px 16px;
        font-size: .875rem;
        min-width: 64px;
        box-sizing: border-box;
        transition: background-color 250ms cubic-bezier(.4, 0, .2, 1) 0s, box-shadow 250ms cubic-bezier(.4, 0, .2, 1) 0s, border 250ms cubic-bezier(.4, 0, .2, 1) 0s;
        font-family: Roboto, Helvetica, Arial, sans-serif;
        font-weight: 500;
        line-height: 1.75;
        border-radius: 4px;
        letter-spacing: .02857em;
        text-transform: uppercase
    }

    .MuiButton-root:hover {
        text-decoration: none;
        background-color: rgba(0, 0, 0, .04)
    }

    .MuiButton-root.Mui-disabled {
        color: rgba(0, 0, 0, .26)
    }

    @media (hover:none) {
        .MuiButton-root:hover {
            background-color: transparent
        }
    }

    .MuiButton-root:hover.Mui-disabled {
        background-color: transparent
    }

    .MuiButton-label {
        width: 100%;
        display: inherit;
        align-items: inherit;
        justify-content: inherit
    }

    .MuiButton-text {
        padding: 6px 8px
    }

    .MuiButton-textPrimary {
        color: #3f51b5
    }

    .MuiButton-textPrimary:hover {
        background-color: rgba(63, 81, 181, .04)
    }

    @media (hover:none) {
        .MuiButton-textPrimary:hover {
            background-color: transparent
        }
    }

    .MuiButton-textSecondary {
        color: #f50057
    }

    .MuiButton-textSecondary:hover {
        background-color: rgba(245, 0, 87, .04)
    }

    @media (hover:none) {
        .MuiButton-textSecondary:hover {
            background-color: transparent
        }
    }

    .MuiButton-outlined {
        border: 1px solid rgba(0, 0, 0, .23);
        padding: 5px 15px
    }

    .MuiButton-outlined.Mui-disabled {
        border: 1px solid rgba(0, 0, 0, .12)
    }

    .MuiButton-outlinedPrimary {
        color: #3f51b5;
        border: 1px solid rgba(63, 81, 181, .5)
    }

    .MuiButton-outlinedPrimary:hover {
        border: 1px solid #3f51b5;
        background-color: rgba(63, 81, 181, .04)
    }

    @media (hover:none) {
        .MuiButton-outlinedPrimary:hover {
            background-color: transparent
        }
    }

    .MuiButton-outlinedSecondary {
        color: #f50057;
        border: 1px solid rgba(245, 0, 87, .5)
    }

    .MuiButton-outlinedSecondary:hover {
        border: 1px solid #f50057;
        background-color: rgba(245, 0, 87, .04)
    }

    .MuiButton-outlinedSecondary.Mui-disabled {
        border: 1px solid rgba(0, 0, 0, .26)
    }

    @media (hover:none) {
        .MuiButton-outlinedSecondary:hover {
            background-color: transparent
        }
    }

    .MuiButton-contained {
        color: rgba(0, 0, 0, .87);
        box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
        background-color: #e0e0e0
    }

    .MuiButton-contained:hover {
        box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12);
        background-color: #d5d5d5
    }

    .MuiButton-contained.Mui-focusVisible {
        box-shadow: 0 3px 5px -1px rgba(0, 0, 0, .2), 0 6px 10px 0 rgba(0, 0, 0, .14), 0 1px 18px 0 rgba(0, 0, 0, .12)
    }

    .MuiButton-contained:active {
        box-shadow: 0 5px 5px -3px rgba(0, 0, 0, .2), 0 8px 10px 1px rgba(0, 0, 0, .14), 0 3px 14px 2px rgba(0, 0, 0, .12)
    }

    .MuiButton-contained.Mui-disabled {
        color: rgba(0, 0, 0, .26);
        box-shadow: none;
        background-color: rgba(0, 0, 0, .12)
    }

    @media (hover:none) {
        .MuiButton-contained:hover {
            box-shadow: 0 3px 1px -2px rgba(0, 0, 0, .2), 0 2px 2px 0 rgba(0, 0, 0, .14), 0 1px 5px 0 rgba(0, 0, 0, .12);
            background-color: #e0e0e0
        }
    }

    .MuiButton-contained:hover.Mui-disabled {
        background-color: rgba(0, 0, 0, .12)
    }

    .MuiButton-containedPrimary {
        color: #fff;
        background-color: #3f51b5
    }

    .MuiButton-containedPrimary:hover {
        background-color: #303f9f
    }

    @media (hover:none) {
        .MuiButton-containedPrimary:hover {
            background-color: #3f51b5
        }
    }

    .MuiButton-containedSecondary {
        color: #fff;
        background-color: #f50057
    }

    .MuiButton-containedSecondary:hover {
        background-color: #c51162
    }

    @media (hover:none) {
        .MuiButton-containedSecondary:hover {
            background-color: #f50057
        }
    }

    .MuiButton-disableElevation {
        box-shadow: none
    }

    .MuiButton-disableElevation:hover {
        box-shadow: none
    }

    .MuiButton-disableElevation.Mui-focusVisible {
        box-shadow: none
    }

    .MuiButton-disableElevation:active {
        box-shadow: none
    }

    .MuiButton-disableElevation.Mui-disabled {
        box-shadow: none
    }

    .MuiButton-colorInherit {
        color: inherit;
        border-color: currentColor
    }

    .MuiButton-textSizeSmall {
        padding: 4px 5px;
        font-size: .8125rem
    }

    .MuiButton-textSizeLarge {
        padding: 8px 11px;
        font-size: .9375rem
    }

    .MuiButton-outlinedSizeSmall {
        padding: 3px 9px;
        font-size: .8125rem
    }

    .MuiButton-outlinedSizeLarge {
        padding: 7px 21px;
        font-size: .9375rem
    }

    .MuiButton-containedSizeSmall {
        padding: 4px 10px;
        font-size: .8125rem
    }

    .MuiButton-containedSizeLarge {
        padding: 8px 22px;
        font-size: .9375rem
    }

    .MuiButton-fullWidth {
        width: 100%
    }

    .MuiButton-startIcon {
        display: inherit;
        margin-left: -4px;
        margin-right: 8px
    }

    .MuiButton-startIcon.MuiButton-iconSizeSmall {
        margin-left: -2px
    }

    .MuiButton-endIcon {
        display: inherit;
        margin-left: 8px;
        margin-right: -4px
    }

    .MuiButton-endIcon.MuiButton-iconSizeSmall {
        margin-right: -2px
    }

    .MuiButton-iconSizeSmall>:first-child {
        font-size: 18px
    }

    .MuiButton-iconSizeMedium>:first-child {
        font-size: 20px
    }

    .MuiButton-iconSizeLarge>:first-child {
        font-size: 22px
    }
</style>
<style data-jss="" data-meta="MuiDialog">
    @media print {
        .MuiDialog-root {
            position: absolute!important
        }
    }

    .MuiDialog-scrollPaper {
        display: flex;
        align-items: center;
        justify-content: center
    }

    .MuiDialog-scrollBody {
        overflow-x: hidden;
        overflow-y: auto;
        text-align: center
    }

    .MuiDialog-scrollBody:after {
        width: 0;
        height: 100%;
        content: "";
        display: inline-block;
        vertical-align: middle
    }

    .MuiDialog-container {
        height: 100%;
        outline: 0
    }

    @media print {
        .MuiDialog-container {
            height: auto
        }
    }

    .MuiDialog-paper {
        margin: 32px;
        position: relative;
        overflow-y: auto
    }

    @media print {
        .MuiDialog-paper {
            box-shadow: none;
            overflow-y: visible
        }
    }

    .MuiDialog-paperScrollPaper {
        display: flex;
        max-height: calc(100% - 64px);
        flex-direction: column
    }

    .MuiDialog-paperScrollBody {
        display: inline-block;
        text-align: left;
        vertical-align: middle
    }

    .MuiDialog-paperWidthFalse {
        max-width: calc(100% - 64px)
    }

    .MuiDialog-paperWidthXs {
        max-width: 444px
    }

    @media (max-width:507.95px) {
        .MuiDialog-paperWidthXs.MuiDialog-paperScrollBody {
            max-width: calc(100% - 64px)
        }
    }

    .MuiDialog-paperWidthSm {
        max-width: 600px
    }

    @media (max-width:663.95px) {
        .MuiDialog-paperWidthSm.MuiDialog-paperScrollBody {
            max-width: calc(100% - 64px)
        }
    }

    .MuiDialog-paperWidthMd {
        max-width: 960px
    }

    @media (max-width:1023.95px) {
        .MuiDialog-paperWidthMd.MuiDialog-paperScrollBody {
            max-width: calc(100% - 64px)
        }
    }

    .MuiDialog-paperWidthLg {
        max-width: 1280px
    }

    @media (max-width:1343.95px) {
        .MuiDialog-paperWidthLg.MuiDialog-paperScrollBody {
            max-width: calc(100% - 64px)
        }
    }

    .MuiDialog-paperWidthXl {
        max-width: 1920px
    }

    @media (max-width:1983.95px) {
        .MuiDialog-paperWidthXl.MuiDialog-paperScrollBody {
            max-width: calc(100% - 64px)
        }
    }

    .MuiDialog-paperFullWidth {
        width: calc(100% - 64px)
    }

    .MuiDialog-paperFullScreen {
        width: 100%;
        height: 100%;
        margin: 0;
        max-width: 100%;
        max-height: none;
        border-radius: 0
    }

    .MuiDialog-paperFullScreen.MuiDialog-paperScrollBody {
        margin: 0;
        max-width: 100%
    }
</style>
<style data-jss="" data-meta="makeStyles">
    .jss20 {
        text-transform: none
    }
</style>
<style data-jss="" data-meta="makeStyles">
    .jss6 {
        line-height: 1.5;
        text-transform: none
    }

    .jss6:hover {
        color: #fff;
        background-color: #007bff
    }

    .jss7 {
        box-shadow: none
    }

    .jss7:active {
        box-shadow: 0 3px 1px -2px rgb(0 0 0 / 20%), 0 2px 2px 0 rgb(0 0 0 / 14%), 0 1px 5px 0 rgb(0 0 0 / 12%)
    }
</style>
<style data-jss="" data-meta="makeStyles">
    .jss8 {
        text-transform: none
    }
</style>
<style data-jss="" data-meta="makeStyles">
    .jss9 {
        text-transform: none
    }
</style>
<style data-jss="" data-meta="makeStyles">
    .jss21 {
        width: 300px;
        outline: 0;
        padding: 10px 10px
    }

    .jss22 {
        left: 0;
        color: #000;
        width: 600px;
        border: 1px solid rgba(0, 0, 0, .25);
        margin: 0;
        padding: 0;
        z-index: 1;
        overflow: auto;
        position: absolute;
        list-style: none;
        margin-top: 5px;
        max-height: 300px;
        text-align: left;
        background-color: #fff
    }

    .jss22 li[data-focus=true] {
        color: #fff;
        cursor: pointer;
        background-color: #4a8df6
    }

    .jss22 li:active {
        color: #000;
        background-color: #2977f5
    }

    .jss23 {
        text-transform: none
    }
</style>
<style data-jss="" data-meta="makeStyles">
    label+.jss24 {
        margin-right: 8px
    }

    .jss25 {
        width: 100px;
        padding: 10px 26px 10px 12px;
        position: relative;
        font-size: 16px;
        text-align: left;
        transition: border-color .3s cubic-bezier(.4, 0, .2, 1) 0s, box-shadow .3s cubic-bezier(.4, 0, .2, 1) 0s;
        font-weight: 600;
        border-radius: 4px;
        background-color: #f2f2f2
    }

    .jss25:focus {
        box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25);
        border-color: #80bdff;
        border-radius: 4px
    }
</style>
<style type="text/css">
    @charset "UTF-8";
    /*!
* Bootstrap v4.6.0 (https://getbootstrap.com/)
* Copyright 2011-2021 The Bootstrap Authors
* Copyright 2011-2021 Twitter, Inc.
* Licensed under MIT (https://github.com/twbs/bootstrap/blob/main/LICENSE)
*/

    .slick-slider {
        box-sizing: border-box;
        -webkit-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-touch-callout: none;
        -khtml-user-select: none;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list,
    .slick-slider {
        position: relative;
        display: block
    }

    .slick-list {
        overflow: hidden
    }

    .slick-list:focus {
        outline: 0
    }

    .slick-slider .slick-list,
    .slick-slider .slick-track {
        transform: translateZ(0)
    }

    .slick-track {
        position: relative;
        top: 0;
        left: 0;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    .slick-track:after,
    .slick-track:before {
        display: table;
        content: ""
    }

    .slick-track:after {
        clear: both
    }

    .slick-slide {
        display: none;
        float: left;
        height: 100%;
        min-height: 1px
    }

    .slick-initialized .slick-slide,
    .slick-slide img,
    footer,
    header,
    section {
        display: block
    }

    @font-face {
        font-family: slick;
        font-weight: 400;
        font-style: normal;
        src: url(/static/media/slick.a4e97f5a.eot);
        src: url(/static/media/slick.a4e97f5a.eot?#iefix) format("embedded-opentype"), url(/static/media/slick.29518378.woff) format("woff"), url(/static/media/slick.c94f7671.ttf) format("truetype"), url(/static/media/slick.2630a3e3.svg#slick) format("svg")
    }

    .slick-next,
    .slick-prev {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        display: block;
        width: 20px;
        height: 20px;
        padding: 0;
        transform: translateY(-50%);
        cursor: pointer;
        border: 0
    }

    .slick-next,
    .slick-next:focus,
    .slick-next:hover,
    .slick-prev,
    .slick-prev:focus,
    .slick-prev:hover {
        color: transparent;
        outline: 0;
        background: 0 0
    }

    .slick-next:focus:before,
    .slick-next:hover:before,
    .slick-prev:focus:before,
    .slick-prev:hover:before {
        opacity: 1
    }

    .slick-prev.slick-disabled:before {
        opacity: .25
    }

    .slick-next:before,
    .slick-prev:before {
        font-family: slick;
        line-height: 1;
        opacity: .75;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    .slick-prev {
        left: -25px
    }

    .slick-prev:before {
        content: "←"
    }

    .slick-next {
        right: -25px
    }

    .slick-next:before {
        content: "→"
    }

    html {
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: transparent
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff
    }

    [tabindex="-1"]:focus:not(:focus-visible) {
        outline: 0!important
    }

    hr {
        box-sizing: content-box;
        height: 0;
        overflow: visible;
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, .1)
    }

    h1,
    h2,
    h4 {
        font-weight: 500
    }

    h1,
    h2,
    h3,
    h4,
    p,
    ul {
        margin-top: 0
    }

    h1,
    h2,
    h3,
    h4 {
        line-height: 1.2;
        margin-bottom: .5rem
    }

    p,
    ul {
        margin-bottom: 1rem
    }

    ul {
        list-style: none
    }

    b,
    strong {
        font-weight: bolder
    }

    a {
        color: #007bff;
        background-color: transparent
    }

    a:hover {
        color: #0056b3
    }

    a:not([href]):not([class]),
    a:not([href]):not([class]):hover {
        color: inherit;
        text-decoration: none
    }

    img,
    svg {
        vertical-align: middle
    }

    img {
        border-style: none
    }

    svg {
        overflow: hidden
    }

    button {
        border-radius: 0
    }

    button:focus:not(:focus-visible) {
        outline: 0
    }

    button,
    input {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
        overflow: visible
    }

    button {
        text-transform: none
    }

    [role=button] {
        cursor: pointer
    }

    [type=button],
    [type=submit],
    button {
        -webkit-appearance: button
    }

    [type=button]:not(:disabled),
    [type=submit]:not(:disabled),
    button:not(:disabled) {
        cursor: pointer
    }

    [type=button]::-moz-focus-inner,
    [type=submit]::-moz-focus-inner,
    button::-moz-focus-inner {
        padding: 0;
        border-style: none
    }

    h1 {
        font-size: 2.5rem
    }

    h2 {
        font-size: 2rem
    }

    h3 {
        font-size: 1.75rem
    }

    h4 {
        font-size: 1.5rem
    }

    .m-0 {
        margin: 0!important
    }

    @font-face {
        font-family: Lato-Regular;
        src: url(/static/media/Lato-Regular.9919edff.ttf)
    }

    body,
    html {
        transition: all .5s
    }

    html {
        font-family: Lato, Helvetica Arial, sans-serif!important
    }

    *,
    body {
        font-family: Lato-Regular!important
    }

    * {
        border: 0;
        box-sizing: border-box;
        padding: 0
    }

    body {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    h3 {
        font-weight: 600!important
    }

    .slick-prev:before {
        left: -10px
    }

    .slick-next:before,
    .slick-prev:before {
        font-size: 30px!important;
        color: #b4b4b4!important;
        position: relative;
        top: -7px
    }

    .slick-next:before {
        right: -1px
    }

    .slick-list {
        margin: 55px 0 35px!important;
        padding: 20px 0!important
    }

    .Style_scroll__3jiFe a,
    a,
    a:hover {
        text-decoration: none!important
    }

    .active_bestProperties button {
        background-color: #007bff;
        color: #fff
    }

    .navbarContainer {
        transition: all .6s
    }

    .navbarContainer .innerContainer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        max-width: 1900px;
        height: 65px;
        margin: auto
    }

    .Style_main_div__1CiZ3 {
        z-index: 9;
        top: 0;
        position: absolute;
        width: 100%;
        min-width: 991px;
        transition: all .3s linear
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN {
        min-width: 991px;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        padding: 1rem;
        transition: .7s;
        z-index: 1
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_logo__1BoxC img {
        cursor: pointer;
        width: 110px
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN {
        margin-top: 18px
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul .Style_lif__q7XJ- {
        background-color: #007bff;
        margin-right: 15px
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul .Style_lis__1PIYi {
        margin-right: 15px
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul li {
        list-style-type: none;
        display: inline-block;
        border-radius: 3px;
        font-weight: 700;
        letter-spacing: 1px;
        cursor: pointer;
        transition: all .3s ease-in-out;
        padding: 1px 10px
    }

    .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul li:hover {
        background-color: #007bff;
        box-shadow: inset 0 0 0 4px #007bff
    }

    .Style_mn_div__3eG-K {
        position: relative;
        width: 100%;
        height: 100vh;
        min-width: 991px;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        color: #fff
    }

    .Style_imgs__1tyNk {
        position: absolute;
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    .Style_backg__1eMcH {
        position: relative;
        width: 100%;
        height: 100vh;
        z-index: 1;
        padding-top: 50px
    }

    .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M {
        height: 100%;
        text-align: center;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center
    }

    .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_main_bar__1fA5I {
        width: 100%;
        max-width: 750px
    }

    .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M h1 {
        color: #fff;
        font-size: 41px;
        padding: 0;
        font-weight: 900;
        letter-spacing: 1.3px;
        word-spacing: 1px;
        width: 550px
    }

    .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ {
        margin-top: 30px;
        background-color: #fff;
        border-radius: 5px;
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 55px
    }

    .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ .Style_searchIcon__3Maw7 {
        width: 5%;
        color: rgba(0, 0, 0, .2);
        margin-left: 5px
    }

    .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ button {
        border-radius: 3px;
        margin-left: 10px;
        margin-right: 8px;
        background-color: #007bff;
        color: #fff;
        border: 0;
        outline: 0;
        cursor: pointer;
        padding: 0 20px;
        height: 36px
    }

    .Style_scroll__3jiFe {
        position: absolute;
        right: 30px;
        bottom: 30px;
        text-align: center;
        cursor: pointer
    }

    .Style_scroll__3jiFe a {
        color: #fff!important
    }

    .Style_scroll__3jiFe .Style_txtScroll__2AA0Y {
        font-size: 16px;
        -ms-writing-mode: tb-rl;
        writing-mode: vertical-rl;
        text-transform: uppercase;
        margin-bottom: 15px;
        position: relative;
        left: 2px
    }

    @media screen and (max-width:1400px) {
        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_logo__1BoxC img {
            width: 120px;
            height: auto
        }
        .Style_main_div__1CiZ3 .Style_s_div__ir9VN .Style_tabss__355JN ul li {
            font-size: 15px
        }
        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ {
            margin-top: 15px;
            height: 52px
        }
        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_main_bar__1fA5I {
            max-width: 680px
        }
    }

    @media screen and (max-width:1200px) {
        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_searchdiv__QMXZ_ {
            margin-top: 15px;
            height: 52px
        }
        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M .Style_main_bar__1fA5I {
            max-width: 600px
        }
        .Style_backg__1eMcH .Style_backg_sdiv__Gjg5M h1 {
            font-size: 38px
        }
    }

    .Style_main_section__3Esea {
        text-align: center;
        padding: 0 20px;
        min-width: 991px;
        margin-bottom: -15px
    }

    .Style_main_section__3Esea h2 {
        padding-top: 20px;
        font-size: 35px;
        font-weight: 700;
        margin-bottom: 70px
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB {
        display: flex;
        justify-content: center;
        max-width: 1200px;
        min-width: 891px;
        margin: auto
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB div:nth-child(4) {
        margin-right: 0
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM {
        border-radius: 5px;
        background-color: #e9ebec;
        padding: 0 30px;
        width: 300px;
        height: 200px;
        margin-right: 20px;
        cursor: pointer
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM img {
        width: 100%;
        height: 100%;
        position: relative;
        top: -30px;
        border-radius: 5px
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM h4 {
        font-size: 20px;
        font-weight: 700;
        color: #000
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM .Style_imgs__hHNpV {
        transition: all .2s linear
    }

    .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM .Style_imgs__hHNpV:hover {
        transform: scale(1.1)
    }

    @media screen and (max-width:1400px) {
        .Style_main_section__3Esea {
            padding-top: 25px;
            font-size: 33px
        }
        .Style_main_section__3Esea .Style_cardss__1yeNB .Style_crd__3IfAM {
            height: 170px
        }
    }

    .Style_maindiv__zvbaR {
        width: 100%;
        text-align: center;
        padding: 50px 20px 0;
        position: relative;
        min-width: 991px
    }

    .Style_maindiv__zvbaR hr {
        background-color: #f6f7fb;
        max-width: 1300px;
        margin: auto
    }

    .Style_maindiv__zvbaR .Style_secdiv__3gJ9V {
        width: 100%;
        max-width: 1300px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: -70px!important
    }

    .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_secdivtxt__25WL6 {
        font-size: 30px;
        font-weight: 700
    }

    .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul {
        display: flex
    }

    .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul .Style_viewall__kbCD2 button {
        color: #007bff;
        background-color: transparent;
        border: 1px solid #e9ebec;
        margin-left: 50px;
        padding: 5px 15px
    }

    .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul>li>button {
        padding: 5px 15px;
        border-radius: 3px;
        font-size: 16px;
        margin-left: 10px
    }

    .Style_mainSlide_Div__rIXZE {
        text-align: -webkit-center;
        width: 100%;
        max-width: 1380px;
        margin: auto;
        padding: 0 30px
    }

    @media screen and (max-width:1400px) {
        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_secdivtxt__25WL6 {
            font-size: 29px
        }
        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57>ul>li>button {
            font-size: 15px
        }
        .Style_maindiv__zvbaR .Style_secdiv__3gJ9V .Style_sul__o5v57 {
            margin-top: 10px
        }
    }

    @media (max-width:1230px) {
        .Style_mainSlide_Div__rIXZE {
            max-width: 1115px
        }
    }

    .Style_maindiv__1aBho {
        width: 93%;
        border-radius: 10px;
        box-shadow: 0 0 10px 5px #eee;
        padding: 5px 5px 1px
    }

    .Style_maindiv__1aBho .Style_img_div__2wG9Z {
        height: 240px;
        width: 100%;
        position: relative
    }

    .Style_maindiv__1aBho .Style_img_div__2wG9Z img {
        border-radius: 10px;
        cursor: pointer
    }

    .Style_maindiv__1aBho .Style_img_div__2wG9Z .Style_sale__19ykp {
        position: absolute;
        top: 5px;
        left: 5px;
        background-color: #c90000;
        color: #fff;
        border-radius: 5px;
        font-size: 14px;
        padding: 3px 10px
    }

    .Style_maindiv__1aBho .Style_img_div__2wG9Z .Style_ptxt1__3M7at {
        margin: 10px auto auto;
        display: flex;
        justify-content: space-between;
        width: 93.5%;
        font-size: 14px
    }

    .Style_maindiv__1aBho .Style_img_div__2wG9Z .Style_ptxt1__3M7at>p {
        color: rgba(0, 0, 0, .3)
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 {
        height: 47%;
        width: 95%;
        margin: auto
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_ptxt2__1CSQr {
        margin-top: 20px;
        width: 100%;
        height: 30%;
        text-align: left;
        padding-left: 2px
    }

    .Style_mainSlide_Div__2xUzD a,
    .Style_mainSlide_Div__2xUzD a:hover,
    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 a,
    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_ptxt2__1CSQr a {
        color: #000
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_ptxt2__1CSQr p {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET {
        display: flex
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_pro_bed__2P17S {
        margin-left: 1px;
        margin-right: 5px;
        width: 17px;
        fill: #79879c
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_bed_count__1fkhV {
        border-right: 1px solid #000;
        display: inline-block;
        padding-right: 18px;
        font-size: 13px
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn2__1bWa2 {
        padding-left: 6px
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_pro_bath__211eG {
        padding: 0 10px;
        width: 38px;
        fill: #79879c
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_bath_count__3PVqa {
        border-right: 1px solid #000;
        display: inline-block;
        padding-right: 18px;
        font-size: 13px
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn3__3DKIv {
        display: flex;
        margin: auto
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_pro_area__OBTIC {
        width: 20px;
        margin-left: 5px
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_area_count__1_QqF {
        font-size: 13px;
        position: relative;
        left: 8px;
        display: inline-block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        width: 105px;
        text-align: left
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy {
        margin: 10px 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy button {
        background: 0 0
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy .Style_VMBtn__ERtZP {
        background-color: #007bff;
        border-radius: 3px;
        width: 48%;
        font-size: 14px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy button:nth-child(2) {
        height: 35px;
        width: 48%;
        border: 2px solid #007bff;
        background: #fff;
        border-radius: 3px;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000
    }

    .Style_maindiv__1aBho .Style_mainchild__OhnI1 .Style_btndiv__36ojy button:nth-child(2):focus {
        outline: 0
    }

    @media screen and (max-width:1400px) {
        .Style_maindiv__1aBho .Style_img_div__2wG9Z {
            height: 220px
        }
    }

    @media (max-width:1300px) {
        .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_pro_bed__2P17S {
            margin-left: 1px;
            margin-right: 5px;
            width: 17px;
            fill: #79879c
        }
        .Style_icn_container__1JFET .Style_icn1__1tH1a .Style_bed_count__1fkhV {
            border-right: 1px solid #000;
            display: inline-block;
            padding-right: 10px!important;
            font-size: 13px
        }
        .Style_icn_container__1JFET .Style_icn2__1bWa2 {
            padding-left: 0!important
        }
        .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_pro_bath__211eG {
            padding: 0 10px;
            width: 38px;
            fill: #79879c
        }
        .Style_icn_container__1JFET .Style_icn2__1bWa2 .Style_bath_count__3PVqa {
            border-right: 1px solid #000;
            display: inline-block;
            padding-right: 12px!important;
            font-size: 13px
        }
        .Style_icn_container__1JFET .Style_icn3__3DKIv {
            display: flex;
            margin: auto
        }
        .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_pro_area__OBTIC {
            width: 20px;
            margin-left: 0!important
        }
        .Style_icn_container__1JFET .Style_icn3__3DKIv .Style_area_count__1_QqF {
            font-size: 13px;
            position: relative;
            left: 5px!important;
            display: inline-block
        }
    }

    .Style_main_div__2Efn3 {
        background-color: #fbfbfb;
        padding: 60px 50px;
        width: 100%;
        max-width: 1620px;
        min-width: 991px;
        margin: auto
    }

    .Style_main_div__2Efn3 .Style_sdiv__28NCf {
        width: 100%;
        max-width: 1310px;
        margin: auto;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .Style_main_div__2Efn3 .Style_sdiv__28NCf .Style_f_div__1HEyq {
        width: 300px!important
    }

    .Style_mainSlide_Div__2xUzD {
        margin-left: 50px;
        text-align: -webkit-center;
        width: 850px
    }

    .Style_apart__16bO7,
    .Style_house__3emmS,
    .Style_office__5SF1Z,
    .Style_svilla__AFRMr,
    .Style_villa__197V_ {
        cursor: pointer;
        width: 170px!important;
        padding-top: 25px;
        padding-bottom: 10px;
        background-color: #fff;
        box-shadow: 0 0 10px 5px #eee
    }

    @media (max-width:1270px) {
        .Style_mainSlide_Div__2xUzD {
            max-width: 650px!important
        }
    }

    @media (max-width:1400px) {
        .Style_main_div__2Efn3 {
            padding: 10px 50px
        }
    }

    .Style_main_div__2SsuI {
        width: 100%;
        max-width: 1650px;
        min-width: 991px;
        display: flex;
        justify-content: space-between;
        background-color: #fff;
        padding: 80px 20px;
        margin: auto
    }

    .Style_main_div__2SsuI .Style_fdiv__3yvZ9,
    .Style_main_div__2SsuI .Style_sdiv__1Vcb9 {
        width: 50%;
        height: 200px;
        display: flex;
        background-position: 50%;
        background-repeat: no-repeat;
        background-size: cover;
        align-items: center;
        justify-content: space-around
    }

    .Style_main_div__2SsuI .Style_fdiv__3yvZ9 {
        margin-right: 20px;
        background-image: url(/static/media/propertyCard.32b672a1.webp)
    }

    .Style_main_div__2SsuI .Style_fdiv__3yvZ9 .Style_fdiv_fch__2L__V>p,
    .Style_main_div__2SsuI .Style_sdiv__1Vcb9 .Style_sdiv_fch__kDI7A>p {
        font-size: 30px;
        font-weight: bolder;
        color: #fff;
        line-height: 20px
    }

    .Style_main_div__2SsuI .Style_fdiv__3yvZ9 .Style_fdiv_sch__1Ehp0>a button,
    .Style_main_div__2SsuI .Style_sdiv__1Vcb9 .Style_sdiv_sch__1AMoj>a button {
        height: auto;
        color: #fff;
        background-color: #007bff;
        border-radius: 3px;
        padding: 8px 30px;
        font-size: 18px;
        font-weight: 700
    }

    .Style_main_div__2SsuI .Style_sdiv__1Vcb9 {
        background-image: url(/static/media/constructionCard.e0303ecf.webp)
    }

    @media (max-width:1300px) {
        .Style_main_div__2SsuI {
            flex-direction: column;
            justify-content: center;
            align-items: center
        }
        .Style_main_div__2SsuI .Style_fdiv__3yvZ9 {
            margin-right: 0;
            width: 80%;
            margin-bottom: 20px
        }
        .Style_main_div__2SsuI .Style_sdiv__1Vcb9 {
            width: 80%
        }
    }

    .Style_main_div__2Im_F {
        width: 100%;
        text-align: center;
        position: relative;
        margin-bottom: 60px;
        min-width: 1007px;
        background-color: #101820
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a {
        width: 100%;
        padding: 50px 15px;
        max-width: 1318px;
        margin: auto;
        display: flex;
        justify-content: space-around;
        align-items: center
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_inpErrors__rLBew {
        margin-bottom: -5px;
        color: red;
        font-size: 14px;
        font-weight: 600;
        position: absolute;
        margin-left: 5px;
        letter-spacing: 2.5px
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH {
        width: auto;
        display: flex;
        justify-content: space-between;
        align-items: center
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input {
        text-decoration: none;
        border: 1px solid #fff;
        border-radius: 3px;
        color: #fff;
        background-color: #101820;
        outline: 0;
        padding: 8px 0 8px 15px
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input::-webkit-input-placeholder {
        color: #fff
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input:-ms-input-placeholder {
        color: #fff
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH input::placeholder {
        color: #fff
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_input_div__-o7jH button {
        text-align: center;
        margin-left: 10px;
        color: #fff;
        background-color: #007bff;
        border-radius: 3px;
        padding: 8px 30px;
        font-size: 16px;
        font-weight: 700
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_f_div__3wB5J {
        margin-right: 50px;
        display: flex;
        flex-direction: column
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_f_div__3wB5J h4 {
        text-align: left;
        font-weight: 900;
        color: #fff
    }

    .Style_main_div__2Im_F .Style_sdiv__1h_4a .Style_f_div__3wB5J p {
        color: #fff;
        text-align: left
    }

    .Style_main_div__2Oe0L {
        max-width: 1620px;
        min-width: 991px;
        padding: 0 20px;
        margin: auto
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU {
        display: flex;
        justify-content: space-between;
        max-width: 1120px;
        min-width: 950px;
        margin: auto auto 50px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call__kzEDm {
        padding-left: 20px;
        border-left: 2px solid #e7e7e7;
        display: flex
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call1__2XSHO .Style_callimg__GUqWQ,
    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call2__2BVHN .Style_callimg__GUqWQ,
    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call__kzEDm .Style_callimg__GUqWQ {
        margin-right: 25px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call1__2XSHO .Style_callimg__GUqWQ img,
    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call2__2BVHN .Style_callimg__GUqWQ img,
    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call__kzEDm .Style_callimg__GUqWQ img {
        width: 15px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call1__2XSHO,
    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_fdiv__2nTiL .Style_call2__2BVHN {
        margin-top: 30px;
        padding-left: 20px;
        border-left: 2px solid #e7e7e7;
        display: flex
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_sdiv__14QZ2 ul li {
        padding-bottom: 10px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl {
        position: relative;
        top: -10px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl img {
        width: 100px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl p {
        margin-top: 20px;
        width: 420px
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc {
        display: flex;
        flex-direction: column
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc h1 {
        font-size: 1.4rem;
        font-weight: 700
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playHeading__1L9Yc {
        align-items: center
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 {
        margin-top: .5rem;
        display: flex;
        align-items: center
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj- {
        margin-right: 1rem;
        padding: .4rem .5rem .5rem;
        cursor: pointer;
        border-radius: 100%;
        width: 40px;
        height: 40px;
        background-color: rgba(0, 0, 0, .1);
        transition: all .6s
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_instagram__3u4dG:hover {
        color: #ef4f02;
        background-color: rgba(239, 79, 2, .1)
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_facebook__1iWwQ:hover {
        color: #1877f2;
        background-color: rgba(24, 119, 242, .1)
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_youtube__TDLxj:hover {
        color: #cf2321;
        background-color: rgba(207, 35, 33, .1)
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_linkedin__2lGUP:hover {
        color: #0073b1;
        background-color: rgba(0, 115, 177, .1)
    }

    .Style_main_div__2Oe0L .Style_sub_div__3_1FU .Style_tdiv__2kdYl .Style_play__3GBtc .Style_playIcons__2llv5 .Style_icon__3oFj-.Style_google__18FSk:hover {
        color: #03e282;
        background-color: rgba(3, 226, 130, .1)
    }

    .Style_txt_div__32hGa p:first-of-type {
        color: #007cff
    }

    .Style_footerbottom__2Yugr {
        border-top: 1px solid #e7e7e7;
        max-width: 1620px;
        min-width: 891px;
        margin: auto;
        font-size: 14px;
        padding: 20px 0
    }

    .Style_footerbottom__2Yugr .Style_footersub_div__1ZRrl {
        display: flex;
        justify-content: space-between;
        max-width: 1350px;
        min-width: 800px;
        margin-left: auto
    }

    .Style_footerbottom__2Yugr button {
        background-color: #007cff;
        padding: 6px 7px;
        border-radius: 100%
    }
</style>
@endsection

@section('content')

<section class="Style_main_section__3Esea" id="find">
    <h2>Find the Business in town</h2>
    <div class="Style_cardss__1yeNB">
        <a href="/real-estate-agencies" class="Style_crd__3IfAM" title="Realtor"><img alt="Best Realtor" src="http://localhost:45678/static/media/propertyhigh.061ee941.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
            <h4>Realtor</h4>
        </a>
        <a href="/property" class="Style_crd__3IfAM" title="Property"><img alt="property for sell" src="http://localhost:45678/static/media/realtorhigh.50c95b4c.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
            <h4>Property</h4>
        </a>
        <div class="Style_crd__3IfAM" title="Construction"><img alt="Construction Services" src="http://localhost:45678/static/media/constructionhigh.6128b1b6.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
            <h4>Construction</h4>
        </div>
        <div class="Style_crd__3IfAM" title="Contractor"><img alt="Best Contractor" src="http://localhost:45678/static/media/contractorhigh.e0b9f7c0.webp" class="Style_imgs__hHNpV" style="filter:blur(0)">
            <h4>Contractor</h4>
        </div>
    </div><br><br></section>
<div class="Style_maindiv__zvbaR" id="bestProperty">
    <hr><br><br>
    <div class="Style_secdiv__3gJ9V">
        <div class="Style_secdivtxt__25WL6">
            <h3>Best properties for you</h3>
        </div>
        <div class="Style_sul__o5v57">
            <ul>
                <li class="undefined active_bestProperties" title="All" id="allBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">All</span><span class="MuiTouchRipple-root"></span></button></li>
                <li title="Residential" id="resBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">Residential</span><span class="MuiTouchRipple-root"></span></button></li>
                <li title="Commercial" id="comBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">Commercial</span><span class="MuiTouchRipple-root"></span></button></li>
                <li title="Industrial" id="indBtn"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-contained jss7" type="button" tabindex="0"><span class="MuiButton-label">Industrial</span><span class="MuiTouchRipple-root"></span></button></li>
                <li class="Style_viewall__kbCD2" title="View all"><button class="MuiButtonBase-root MuiButton-root jss6 MuiButton-outlined" type="button" tabindex="0"><span class="MuiButton-label">View all</span><span class="MuiTouchRipple-root"></span></button></li>
            </ul>
        </div>
    </div><br>
    <div class="Style_mainSlide_Div__rIXZE">
        <div class="slick-slider slick-initialized" dir="ltr"><button class="slick-arrow slick-prev" type="button" data-role="none" style="display:block">Previous</button>
            <div class="slick-list">
                <div class="slick-track" style="width:6831px;opacity:1;transform:translate3d(-891px,0,0)">
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="-3" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621597466-8.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>4 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190">
                                                <p style="font-size:16px"><strong>House For Sale in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">4</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="-2" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621512631-2.png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189">
                                                <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">3</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">3</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">2300 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="-1" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187"><img alt="" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621418891png" height="90%" width="100%" title=""></a>
                                        <div class="Style_sale__19ykp">For Buy</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>6 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187">
                                                <p style="font-size:16px"><strong>House For Buy in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">2</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">200 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active slick-current" style="outline:0;width:297px" aria-hidden="false" data-index="0" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664949png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198">
                                                <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF"></span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" style="outline:0;width:297px" aria-hidden="false" data-index="1" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664373png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197">
                                                <p style="font-size:16px"><strong>Building For Rent in Clifton</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1250 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-active" style="outline:0;width:297px" aria-hidden="false" data-index="2" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621663122png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196">
                                                <p style="font-size:16px"><strong>Mezzanine For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="3" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621662011png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195">
                                                <p style="font-size:16px"><strong>House For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.48 Lac</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">2</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">212541 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="4" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621661651-MMM.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194">
                                                <p style="font-size:16px"><strong>Plot For Sale in DHA City</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">6500 Yards</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="5" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621660430-6.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193">
                                                <p style="font-size:16px"><strong>Building For Sale in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">700 Yards</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="6" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621598285-6.png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>4 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192">
                                                <p style="font-size:16px"><strong>Building For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">5</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">5</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="7" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621597466-8.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>4 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190">
                                                <p style="font-size:16px"><strong>House For Sale in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">4</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="8" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621512631-2.png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189">
                                                <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">3</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">3</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">2300 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide" style="outline:0;width:297px" aria-hidden="true" data-index="9" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187"><img alt="" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621418891png" height="90%" width="100%" title=""></a>
                                        <div class="Style_sale__19ykp">For Buy</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>6 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187">
                                                <p style="font-size:16px"><strong>House For Buy in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">2</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">200 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="10" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664949png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198">
                                                <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF"></span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Phase_6-3198" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="11" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621664373png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197">
                                                <p style="font-size:16px"><strong>Building For Rent in Clifton</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 60.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1250 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-Clifton-Block_5-3197" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="12" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621663122png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196">
                                                <p style="font-size:16px"><strong>Mezzanine For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-mezzanine-for_rent-DHA-Phase_5-3196" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="13" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621662011png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195">
                                                <p style="font-size:16px"><strong>House For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.48 Lac</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">2</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">212541 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_rent-DHA-Phase_7-3195" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="14" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621661651-MMM.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194">
                                                <p style="font-size:16px"><strong>Plot For Sale in DHA City</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">6500 Yards</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-plot-for_sale-DHA_City-Sector_6,_Gadap_Town-3194" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="15" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621660430-6.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>3 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193">
                                                <p style="font-size:16px"><strong>Building For Sale in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">700 Yards</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_sale-DHA-Phase_5-3193" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="16" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621598285-6.png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Commercial</p>
                                            <p>4 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192">
                                                <p style="font-size:16px"><strong>Building For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">5</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">5</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-commercial-building-for_rent-DHA-Sea_View_Apartments-3192" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="17" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190"><img alt="properties for sale" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621597466-8.png" height="90%" width="100%" title="properties for sale"></a>
                                        <div class="Style_sale__19ykp">For Sale</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>4 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190">
                                                <p style="font-size:16px"><strong>House For Sale in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">4</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">1000</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_sale-DHA-Bahria_Sports_City_Villa-3190" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="18" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189"><img alt="properties for rent" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/1621512631-2.png" height="90%" width="100%" title="properties for rent"></a>
                                        <div class="Style_sale__19ykp">For Rent</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>5 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189">
                                                <p style="font-size:16px"><strong>Flat For Rent in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: On Request</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">3</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">3</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">2300 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-flat-for_rent-DHA-Sea_View_Apartments-3189" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false"
                                                role="button" tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button"
                                                tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide slick-cloned" style="width:297px" aria-hidden="true" data-index="19" tabindex="-1">
                        <div>
                            <div style="width:100%;display:inline-block" tabindex="-1">
                                <div></div>
                                <div class="Style_maindiv__1aBho">
                                    <div class="Style_img_div__2wG9Z">
                                        <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187"><img alt="" src="https://chhatt.s3.ap-south-1.amazonaws.com/properties/StaticMap/marker1621418891png" height="90%" width="100%" title=""></a>
                                        <div class="Style_sale__19ykp">For Buy</div>
                                        <div class="Style_ptxt1__3M7at">
                                            <p>Residential</p>
                                            <p>6 days ago</p>
                                        </div>
                                    </div>
                                    <div class="Style_mainchild__OhnI1">
                                        <div class="Style_ptxt2__1CSQr">
                                            <a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187">
                                                <p style="font-size:16px"><strong>House For Buy in DHA</strong></p>
                                            </a><b><p style="font-size:16px;color:#d63f3f;margin-top:-15px;margin-bottom:5px">Rs: 25.0 k</p></b></div>
                                        <div class="Style_icn_container__1JFET">
                                            <div class="Style_icn1__1tH1a"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bed__2P17S"><path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z"></path></svg>
                                                <span class="Style_bed_count__1fkhV">2</span></div>
                                            <div class="Style_icn2__1bWa2"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="Style_pro_bath__211eG"><path d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z"></path></svg>
                                                <span class="Style_bath_count__3PVqa">2</span>
                                            </div>
                                            <div class="Style_icn3__3DKIv"><img alt="area" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkARcNHAkm3MMIAAABS0lEQVQ4y43TQUtUYRSH8d8gxgQmLcJ9s01KJFsEbmojQosZqKDCvoVLV9LClUPt2gVtTETauHNT4FcQ5EIUSAMiKujY3Iunxajda3LvnLN9nv97zoEXeOqzYUM+iZI+tmasj58Ia4YN+SiR6AqpROJACD8kdoWweoHHuQIvpVIvMGlfWMSoLSEc8dWZI+G3rqlS/JuOjJuaNoXHnlTgI37KgE3hbiVes1sUnktlXmHCnrB0iX93S01b5IX5AfCCEKXDtIWOw7xQld4xXlx6riL9HlevdD2+fIm3pHmhWToMLb3i0qcV6T2ZP8UrXU1fLqRn5oo7vKtIf/P/0lU47/PCgwp8Sl3Nh3/CTik+7cSGulpfWBHCtvsa2sKxZxpe6wkLGhoe+SVsqPeF2dK/nO/18yfMeOuOsnrotlNNA9asM10zg+Lc8KWP/wWPqCIPn70hDwAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0wMS0yM1QxMzoyODowOSswMDowMNhs88EAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMDEtMjNUMTM6Mjg6MDkrMDA6MDCpMUt9AAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg=="
                                                    class="Style_pro_area__OBTIC"><span class="Style_area_count__1_QqF">200 Sq.ft</span></div>
                                        </div>
                                        <div class="Style_btndiv__36ojy"><a href="/propertyDetail/karachi-residential-house-for_buy-DHA-Phase_6-3187" class="MuiButtonBase-root MuiButton-root jss20 MuiButton-contained Style_VMBtn__ERtZP" aria-disabled="false" role="button"
                                                tabindex="0"><span class="MuiButton-label">View more</span><span class="MuiTouchRipple-root"></span></a><button class="MuiButtonBase-root MuiButton-root jss20 MuiButton-text" type="button" tabindex="0"><span class="MuiButton-label">Contact Us</span><span class="MuiTouchRipple-root"></span></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><button class="slick-arrow slick-next" type="button" data-role="none" style="display:block">Next</button></div>
        <hr style="margin:0 0 60px">
    </div>
</div>
<div class="Style_main_div__2Efn3">
    <div class="Style_sdiv__28NCf">
        <div class="Style_f_div__1HEyq">
            <h3><b>Explore</b></h3>
            <h3><b>by Property Type</b></h3>
        </div>
        <div class="Style_mainSlide_Div__2xUzD">
            <div class="slick-slider slick-initialized" dir="ltr">
                <div class="slick-arrow slick-prev slick-disabled" style="display:block"></div>
                <div class="slick-list">
                    <div class="slick-track" style="width:1302px;opacity:1;transform:translate3d(0,0,0)">
                        <div class="slick-slide slick-active slick-current" style="outline:0;width:217px" aria-hidden="false" data-index="0" tabindex="-1">
                            <div>
                                <a href="/property/flat" tabindex="-1" style="width:100%;display:inline-block" title="Flat">
                                    <div class="Style_apart__16bO7"><img alt="flat for sale" src="/static/media/apartment.080cda44.svg" height="60px" width="50px"><br>
                                        <p>Flat</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="slick-slide slick-active" style="outline:0;width:217px" aria-hidden="false" data-index="1" tabindex="-1">
                            <div>
                                <a href="/property/villa" tabindex="-1" style="width:100%;display:inline-block" title="Villa">
                                    <div class="Style_house__3emmS"><img alt="home for sale" src="/static/media/home.baca284c.svg" height="55px" width="60px"><br>
                                        <p>Villa</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="slick-slide slick-active" style="outline:0;width:217px" aria-hidden="false" data-index="2" tabindex="-1">
                            <div>
                                <a href="/property/plot" tabindex="-1" style="width:100%;display:inline-block" title="Plot">
                                    <div class="Style_office__5SF1Z"><img alt="plot for sale" src="/static/media/office-desk.6715aeb0.svg" height="55px" width="60px"><br>
                                        <p>Plot</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="slick-slide" style="outline:0;width:217px" aria-hidden="true" data-index="3" tabindex="-1">
                            <div>
                                <a href="/property/farm-house" tabindex="-1" style="width:100%;display:inline-block" title="Farm House">
                                    <div class="Style_villa__197V_"><img alt="villa for sale" src="/static/media/villa.ea74d56f.svg" height="55px" width="60px"><br>
                                        <p>Farm House</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="slick-slide" style="outline:0;width:217px" aria-hidden="true" data-index="4" tabindex="-1">
                            <div>
                                <a href="/property/upper-portion" tabindex="-1" style="width:100%;display:inline-block" title="Upper Portion">
                                    <div class="Style_svilla__AFRMr"><img alt="upper portion for sale" src="/static/media/villa.ea74d56f.svg" height="55px" width="60px"><br>
                                        <p>Upper Portion</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="slick-slide" style="outline:0;width:217px" aria-hidden="true" data-index="5" tabindex="-1">
                            <div>
                                <a href="/property/lower-portion" tabindex="-1" style="width:100%;display:inline-block" title="Lower Portion">
                                    <div class="Style_svilla__AFRMr"><img alt="lower portion for sale" src="/static/media/villa.ea74d56f.svg" height="55px" width="60px"><br>
                                        <p>Lower Portion</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-arrow slick-next" style="display:block"></div>
            </div>
        </div>
    </div>
</div>
<div class="Style_main_div__2SsuI">
    <div class="Style_fdiv__3yvZ9" title="Properties Site">
        <div class="Style_fdiv_fch__2L__V">
            <p>Hundred of properties</p>
            <p>from top locations</p>
        </div>
        <div class="Style_fdiv_sch__1Ehp0"><a href="/property"><button class="MuiButtonBase-root MuiButton-root jss8 MuiButton-contained" type="button" tabindex="0"><span class="MuiButton-label">Properties Site</span><span class="MuiTouchRipple-root"></span></button></a></div>
    </div>
    <div class="Style_sdiv__1Vcb9" title="Construction Site">
        <div class="Style_sdiv_fch__kDI7A">
            <p>Find the best</p>
            <p>construction materials</p>
        </div>
        <div class="Style_sdiv_sch__1AMoj"><a href="/construction"><button class="MuiButtonBase-root MuiButton-root jss8 MuiButton-contained" type="button" tabindex="0"><span class="MuiButton-label">Construction Site</span><span class="MuiTouchRipple-root"></span></button></a></div>
    </div>
</div>
<div class="Style_main_div__2Im_F">
    <div class="Style_sdiv__1h_4a">
        <div class="Style_f_div__3wB5J">
            <h4>Newsletter</h4>
            <p>Subscribe for newsletter and receive latest updates and trends about chhatt.com</p>
        </div>
        <div class="Style_input_div__-o7jH">
            <form class="Style_sdiv__1h_4a">
                <div><input placeholder="Enter your Email" name="email" size="50" type="email">
                    <div class="Style_inpErrors__rLBew"></div>
                </div>
                <div><button class="MuiButtonBase-root MuiButton-root jss9 MuiButton-contained" type="submit" tabindex="0"><span class="MuiButton-label">Subscribe</span><span class="MuiTouchRipple-root"></span></button></div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection

@section('custom-js')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Chhatt.com",
        "url": "https://chhatt.com/",
        "logo": "https://chhatt.com/static/media/logow.0bbcf4ce.png",
        "alternateName": "Chhatt",
        "sameAs": [
            "https://www.facebook.com/ChhattPK/",
            "https://www.instagram.com/chhattcom/?igshid=1aynfz0mquewo",
            "https://www.linkedin.com/company/chhatt-com",
            "https://www.youtube.com/channel/UCrQuXvCQMRvNSpaU3znG9cA/featured"
        ],
        "contactPoint": [{
            "@type": "ContactPoint",
            "telephone": "033 02 244288",
            "contactType": "customer service",
            "email": "info@Chhatt.com",
            "contactOption": "TollFree",
            "areaServed": "PK",
            "availableLanguage": ["en", "ur"]
        }]
    }
</script>
<script>
    ! function(e) {
        function t(t) {
            for (var n, a, i = t[0], c = t[1], l = t[2], s = 0, p = []; s < i.length; s++) a = i[s], Object.prototype.hasOwnProperty.call(o, a) && o[a] && p.push(o[a][0]), o[a] = 0;
            for (n in c) Object.prototype.hasOwnProperty.call(c, n) && (e[n] = c[n]);
            for (f && f(t); p.length;) p.shift()();
            return u.push.apply(u, l || []), r()
        }

        function r() {
            for (var e, t = 0; t < u.length; t++) {
                for (var r = u[t], n = !0, i = 1; i < r.length; i++) {
                    var c = r[i];
                    0 !== o[c] && (n = !1)
                }
                n && (u.splice(t--, 1), e = a(a.s = r[0]))
            }
            return e
        }
        var n = {},
            o = {
                1: 0
            },
            u = [];

        function a(t) {
            if (n[t]) return n[t].exports;
            var r = n[t] = {
                i: t,
                l: !1,
                exports: {}
            };
            return e[t].call(r.exports, r, r.exports, a), r.l = !0, r.exports
        }
        a.e = function(e) {
            var t = [],
                r = o[e];
            if (0 !== r)
                if (r) t.push(r[2]);
                else {
                    var n = new Promise((function(t, n) {
                        r = o[e] = [t, n]
                    }));
                    t.push(r[2] = n);
                    var u, i = document.createElement("script");
                    i.charset = "utf-8", i.timeout = 120, a.nc && i.setAttribute("nonce", a.nc), i.src = function(e) {
                        return a.p + "static/js/" + ({}[e] || e) + "." + {
                            3: "06ed57ea"
                        }[e] + ".chunk.js"
                    }(e);
                    var c = new Error;
                    u = function(t) {
                        i.onerror = i.onload = null, clearTimeout(l);
                        var r = o[e];
                        if (0 !== r) {
                            if (r) {
                                var n = t && ("load" === t.type ? "missing" : t.type),
                                    u = t && t.target && t.target.src;
                                c.message = "Loading chunk " + e + " failed.\n(" + n + ": " + u + ")", c.name = "ChunkLoadError", c.type = n, c.request = u, r[1](c)
                            }
                            o[e] = void 0
                        }
                    };
                    var l = setTimeout((function() {
                        u({
                            type: "timeout",
                            target: i
                        })
                    }), 12e4);
                    i.onerror = i.onload = u, document.head.appendChild(i)
                }
            return Promise.all(t)
        }, a.m = e, a.c = n, a.d = function(e, t, r) {
            a.o(e, t) || Object.defineProperty(e, t, {
                enumerable: !0,
                get: r
            })
        }, a.r = function(e) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(e, Symbol.toStringTag, {
                value: "Module"
            }), Object.defineProperty(e, "__esModule", {
                value: !0
            })
        }, a.t = function(e, t) {
            if (1 & t && (e = a(e)), 8 & t) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var r = Object.create(null);
            if (a.r(r), Object.defineProperty(r, "default", {
                    enumerable: !0,
                    value: e
                }), 2 & t && "string" != typeof e)
                for (var n in e) a.d(r, n, function(t) {
                    return e[t]
                }.bind(null, n));
            return r
        }, a.n = function(e) {
            var t = e && e.__esModule ? function() {
                return e.default
            } : function() {
                return e
            };
            return a.d(t, "a", t), t
        }, a.o = function(e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, a.p = "/", a.oe = function(e) {
            throw console.error(e), e
        };
        var i = this.webpackJsonpmainchhatt = this.webpackJsonpmainchhatt || [],
            c = i.push.bind(i);
        i.push = t, i = i.slice();
        for (var l = 0; l < i.length; l++) t(i[l]);
        var f = c;
        r()
    }([])
</script>

<script type="text/javascript">
    /*! loadCSS. [c]2017 Filament Group, Inc. MIT License */ ! function(e) {
        "use strict";
        var n = function(n, t, o) {
            function i(e) {
                if (a.body) return e();
                setTimeout(function() {
                    i(e)
                })
            }

            function r() {
                l.addEventListener && l.removeEventListener("load", r), l.media = o || "all"
            }
            var d, a = e.document,
                l = a.createElement("link");
            if (t) d = t;
            else {
                var f = (a.body || a.getElementsByTagName("head")[0]).childNodes;
                d = f[f.length - 1]
            }
            var s = a.styleSheets;
            l.rel = "stylesheet", l.href = n, l.media = "only x", i(function() {
                d.parentNode.insertBefore(l, t ? d : d.nextSibling)
            });
            var u = function(e) {
                for (var n = l.href, t = s.length; t--;)
                    if (s[t].href === n) return e();
                setTimeout(function() {
                    u(e)
                })
            };
            return l.addEventListener && l.addEventListener("load", r), l.onloadcssdefined = u, u(r), l
        };
        "undefined" != typeof exports ? exports.loadCSS = n : e.loadCSS = n
    }("undefined" != typeof global ? global : this);
    /*! loadCSS rel=preload polyfill. [c]2017 Filament Group, Inc. MIT License */
    ! function(t) {
        if (t.loadCSS) {
            var e = loadCSS.relpreload = {};
            if (e.support = function() {
                    try {
                        return t.document.createElement("link").relList.supports("preload")
                    } catch (t) {
                        return !1
                    }
                }, e.poly = function() {
                    for (var e = t.document.getElementsByTagName("link"), r = 0; r < e.length; r++) {
                        var n = e[r];
                        "preload" === n.rel && "style" === n.getAttribute("as") && (t.loadCSS(n.href, n, n.getAttribute("media")), n.rel = null)
                    }
                }, !e.support()) {
                e.poly();
                var r = t.setInterval(e.poly, 300);
                t.addEventListener && t.addEventListener("load", function() {
                    e.poly(), t.clearInterval(r)
                }), t.attachEvent && t.attachEvent("onload", function() {
                    t.clearInterval(r)
                })
            }
        }
    }(this);
</script>
@endsection
