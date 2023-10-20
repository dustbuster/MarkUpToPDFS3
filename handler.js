exports.handler = async (event) => {
    const { main } = await import('./handler.mjs');
    return main(event);
}
