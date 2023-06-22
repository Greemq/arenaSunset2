import _ru from "../_dictionaries/_ru";
import _kk from "../_dictionaries/_kk";
// import _en from "../_dictionaries/_en";

export const defaultLocale = 'kk';

export const locales = [
    {
        code: 'ru',
        name: 'Русский',
        dir: 'ltr',
        dictionary: _ru,
    },
    {
        code: 'kk',
        name: 'Қазақша',
        dir: 'ltr',
        dictionary: _kk,
    },
    // {
    //     code: 'en',
    //     name: 'English',
    //     dir: 'ltr',
    //     dictionary: _en,
    // },
];
