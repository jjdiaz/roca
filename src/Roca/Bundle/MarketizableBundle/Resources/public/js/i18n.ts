const flagTemplate = (country: string, language: string, displayLanguage: boolean, market = '') => {
  return `
<span class="flag-language">
  ${market !='' ? `<span class="language">${market} - </span>` : ''}
  <i class="flag flag-${country}"></i>
  ${displayLanguage ? `<span class="language">${language}</span>` : ''}
</span>`;
};

export const getFlag = (locale: string, displayLanguage: boolean = true, market =''): string => {
  if (!locale) {
    return '';
  }

  let ismarket = false;
  let language ='';
  let country = '';
  // let market = '';

  if (locale.match('_M_')){
    ismarket = true;
  }

  const info = locale.split('_');

  if(ismarket){
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
  }else
  {
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

export const getLabel = (labels: {[locale: string]: string}, locale: string, fallback: string): string => {
  return labels[locale] ? labels[locale] : `[${fallback}]`;
};
