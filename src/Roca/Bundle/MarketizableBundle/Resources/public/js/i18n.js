"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
var flagTemplate = function (country, language, displayLanguage, market) {
    if (market === void 0) { market = ''; }
    return "\n<span class=\"flag-language\">\n  " + (market != '' ? "<span class=\"language\">" + market + " - </span>" : '') + "\n  <i class=\"flag flag-" + country + "\"></i>\n  " + (displayLanguage ? "<span class=\"language\">" + language + "</span>" : '') + "\n</span>";
};
exports.getFlag = function (locale, displayLanguage, market) {
    if (displayLanguage === void 0) { displayLanguage = true; }
    if (market === void 0) { market = ''; }
    if (!locale) {
        return '';
    }
    var ismarket = false;
    var language = '';
    var country = '';
    // let market = '';
    if (locale.match('_M_')) {
        ismarket = true;
    }
    var info = locale.split('_');
    if (ismarket) {
        // console.dir(info);
        language = info[0];
        country = info[1];
        if (info.length === 4) {
            market = info[3];
            country = info[1];
        }
        if (info.length === 5) {
            market = info[4];
            country = info[2];
        }
    }
    else {
        // console.dir(info);
        // console.dir('Locale');
        language = info[0];
        country = info[1];
        if (info.length === 3) {
            country = info[2];
        }
    }
    // console.dir('Country:  ' + country);
    // console.dir('Language: ' + language);
    // console.dir('Mercado:  ' + market);
    return flagTemplate(country.toLowerCase(), language, displayLanguage, market);
};
exports.getLabel = function (labels, locale, fallback) {
    return labels[locale] ? labels[locale] : "[" + fallback + "]";
};
