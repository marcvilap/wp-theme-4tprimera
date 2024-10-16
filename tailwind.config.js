module.exports = {
	content: ["./*.php", "./*/*.php", "./assets/scripts/source.ts"],
	theme: {
		screens: {
			sm: "28rem",
			md: "48rem",
			lg: "64rem",
			xl: "80rem",
		},
		container: {
			center: true,
			padding: {
				DEFAULT: "1rem",
				sm: "2rem",
				xl: "5rem",
			},
		},
		extend: {
			fontFamily: {
				sans: "'Aeonik', sans-serif",
				serif: "'Recoleta', serif",
				cursive: "'Cochocib Script Latin Pro', serif",
			},
			colors: {
				stone: {
					50: "#f4f0e7",
					100: "#e6e2d9",
					200: "#cac6be",
					300: "#aeaba3",
					400: "#939189",
					500: "#797770",
					600: "#605e58",
					700: "#484740",
					800: "#31302b",
					900: "#1c1c16",
					950: "#12110c",
				},
				bronze: {
					50: "#ffefd2",
					100: "#fcdfa3",
					200: "#dec48a",
					300: "#c1a871",
					400: "#a58e59",
					500: "#8a7442",
					600: "#705c2c",
					700: "#564416",
					800: "#3e2e02",
					900: "#251a00",
					950: "#181000",
				},
			},
		},
	},
};
