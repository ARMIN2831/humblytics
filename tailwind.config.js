/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            'inter' : 'Inter,sans-serif'
        },
        extend: {
            boxShadow: {
                'inset1': 'inset 0 -7px 9px -4px rgba(175,175,175,.4)',
                'inset2': 'inset 0 -7px 9px -4px rgba(255, 235, 227, .4);',
                'inset3': 'inset 0 -2px 8px -1px rgba(204,204,204,.4)',
                'inset4': 'inset 0 -8px 4px -9px rgba(175, 175, 175, .4)',
                'shadow1': '0 12px 16px -4px rgba(0,0,0,.08),0 4px 6px -2px rgba(16,24,40,.03)',
                'shadow2': '0 4px 9px rgba(51,51,51,.03)',
                'shadow3': '0 4px 10px 1px rgba(241,241,241,.2)',
                'shadow4': '2px 2px 0 1px #ff9839',
            },
            keyframes: {
                slideUp: {
                    '0%': { transform: 'translateY(15%)', opacity: '0' },
                    '100%': { transform: 'translateY(0%)', opacity: '1' },
                },
                hero: {
                    '0%': { transform: 'translate3d(247.208px, -15.1294px, 0px) scale3d(0.6, 0.6, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)' },
                    '50%': { transform: 'translate3d(-180.395px, -16.6983px, 0px) scale3d(0.7, 0.7, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)' },
                    '100%': { transform: 'translate3d(247.208px, -15.1294px, 0px) scale3d(0.6, 0.6, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg)' },
                },
            },
            animation: {
                'slideUpAnimate': 'slideUp 0.75s ease-out normal running both',
                'heroAnimate': 'hero 5s ease-in-out infinite',
            },
        },
    },
    plugins: [],
}
