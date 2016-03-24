//In order to change the first day of the week you have to
//override moment locale files.
//@link: https://github.com/Eonasdan/bootstrap-datetimepicker/issues/1030
moment.locale('en', {
    week : {
        dow : 1, // Monday is the first day of the week.
        doy : 4  // The week that contains Jan 4th is the first week of the year.
    }
});