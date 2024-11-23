class allLibs {
    // возвращает куки с указанным name,
    // или undefined, если ничего не найдено

    getCookie(name) {
        var results = document.cookie.match ( '(^|;) ?' + name + '=([^;]*)(;|$)' );
 
        if ( results )
          return ( unescape ( results[2] ) );
        else
          return undefined;
    }

    getRequestParam() {
        var s1 = location.search.substring(1, location.search.length).split('&'),
        r = {}, s2, i;
        for (i = 0; i < s1.length; i += 1) {
            s2 = s1[i].split('=');
            let arrayIndex = decodeURIComponent(s2[0]).toLowerCase();
            if (arrayIndex.indexOf('[') == -1)
                {
                    r[arrayIndex] = decodeURIComponent(s2[1]);
                } else {
                    arrayIndex = arrayIndex.substring(0, arrayIndex.indexOf('['));
                    if (typeof r[arrayIndex] === 'object')
                        r[arrayIndex].push(decodeURIComponent(s2[1]).replaceAll('+', ' '))
                    else 
                        r[arrayIndex] = [decodeURIComponent(s2[1]).replaceAll('+', ' ')]
                }
        }
        return r;
    }
}

let alllibs = new allLibs();

export default alllibs