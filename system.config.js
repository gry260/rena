var angularVersion = '2.0.0-rc.5';
var formsVer = '@0.3.0'; // lock forms version

System.config({
    baseUrl: '/',
    paths: {
        'unpkg:*': 'https://unpkg.com/*'
    }
});

System.config({
    transpiler: 'typescript',
    typescriptOptions: { emitDecoratorMetadata: true },

    meta: {
        '*': {
            deps: [ 'zone.js', 'reflect-metadata' ]
        }
    }
});

System.config({
    packageConfigPaths: [
        "unpkg:@*/*/package.json"
    ],

    map: {
        '@angular/core': 'unpkg:@angular/core@'+angularVersion,
        '@angular/compiler': 'unpkg:@angular/compiler@'+angularVersion,
        '@angular/common': 'unpkg:@angular/common@'+angularVersion,
        '@angular/forms':  'unpkg:@angular/forms' + formsVer,
        '@angular/http': 'unpkg:@angular/http@'+angularVersion,
        '@angular/platform-browser': 'unpkg:@angular/platform-browser@'+angularVersion,
        '@angular/platform-browser-dynamic': 'unpkg:@angular/platform-browser-dynamic@'+angularVersion,
        '@angular/router': 'https://npmcdn.com/@angular/router@3.0.0-rc.1',
        '@angular/router-deprecated': 'https://npmcdn.com/@angular/router-deprecated@2.0.0-rc.2',
        '@angular/upgrade': 'https://npmcdn.com/@angular/upgrade@2.0.0-rc.5',
        'angular2-in-memory-web-api': 'https://npmcdn.com/angular2-in-memory-web-api',
        'rxjs': 'unpkg:rxjs@5.0.0-beta.12',
        'zone.js': 'unpkg:zone.js@0.6.25',
        'reflect-metadata': 'unpkg:reflect-metadata@0.1.3',
        "crypto": "@empty"
    },

    packages: {
        'app': {
            defaultExtension: 'ts',
            main: './index.ts'
        }
    }
});

