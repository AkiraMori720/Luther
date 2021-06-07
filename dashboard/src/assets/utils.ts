type svgOption = {
	width?: string;
	height?: string;
	bgColor?: string;
};
export const svgPlaceholder = function({
	width = '50px',
	height = '50px',
	bgColor = '#D3D3D3',
}: svgOption = {}) {
	const str = `<svg xmlns="http://www.w3.org/2000/svg" width="${width}" height="${height}" viewBox="0 0 ${width} ${height}">
	<rect fill="${bgColor}" width="${width}" height="${height}"/>
</svg>`;
	const cleaned = str
		.replace(/[\t\n\r]/gim, '') // Strip newlines and tabs
		.replace(/\s\s+/g, ' ') // Condense multiple spaces
		.replace(/'/gim, '\\i'); // Normalize quotes

	const encoded = encodeURIComponent(cleaned)
		.replace(/\(/g, '%28') // Encode brackets
		.replace(/\)/g, '%29');

	return `data:image/svg+xml;charset=UTF-8,${encoded}`;
};
