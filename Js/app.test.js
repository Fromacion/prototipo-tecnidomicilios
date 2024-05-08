const app = require(".");
const appss = require("./appss");
test('sum app', () => {
    const result = appss.sum(1, 2)
    expect(result).toBe(3);
})


